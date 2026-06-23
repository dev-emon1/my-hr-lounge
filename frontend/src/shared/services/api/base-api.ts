import {
  BaseQueryFn,
  FetchArgs,
  FetchBaseQueryError,
  createApi,
  fetchBaseQuery,
} from "@reduxjs/toolkit/query/react";

import { tokenStorage } from "@/modules/auth/utils/token-storage";

import { API_ENDPOINTS } from "./constants/api-endpoints";

const rawBaseQuery = fetchBaseQuery({
  baseUrl: "http://127.0.0.1:8000/api/v1",

  prepareHeaders: (headers) => {
    const token = tokenStorage.getAccessToken();

    if (token) {
      headers.set("Authorization", `Bearer ${token}`);
    }

    headers.set("Accept", "application/json");

    return headers;
  },
});

const baseQueryWithRefresh: BaseQueryFn<
  string | FetchArgs,
  unknown,
  FetchBaseQueryError
> = async (args, api, extraOptions) => {
  let result = await rawBaseQuery(args, api, extraOptions);

  if (result.error?.status === 401) {
    const refreshToken = tokenStorage.getRefreshToken();

    if (!refreshToken) {
      tokenStorage.clearTokens();

      window.location.href = "/login";

      return result;
    }

    const refreshResult = await rawBaseQuery(
      {
        url: API_ENDPOINTS.AUTH.REFRESH,

        method: "POST",

        body: {
          refresh_token: refreshToken,
        },
      },

      api,

      extraOptions,
    );

    if (refreshResult.data) {
      const data = refreshResult.data as {
        data: {
          access_token: string;

          refresh_token: string;
        };
      };

      tokenStorage.setAccessToken(data.data.access_token);

      tokenStorage.setRefreshToken(data.data.refresh_token);

      result = await rawBaseQuery(args, api, extraOptions);
    } else {
      tokenStorage.clearTokens();

      window.location.href = "/login";
    }
  }

  return result;
};

export const baseApi = createApi({
  reducerPath: "api",

  baseQuery: baseQueryWithRefresh,

  tagTypes: ["Auth", "Dashboard", "Packages", "Tenants"],

  endpoints: () => ({}),
});
