import { baseApi } from "@/shared/services/api/base-api";

import { API_ENDPOINTS } from "@/shared/services/api/constants/api-endpoints";

import type { LoginPayload, LoginResponse } from "../types/auth.types";

export const authApi = baseApi.injectEndpoints({
  endpoints: (builder) => ({
    login: builder.mutation<LoginResponse, LoginPayload>({
      query: (body) => ({
        url: API_ENDPOINTS.AUTH.LOGIN,

        method: "POST",

        body,
      }),
    }),

    getMe: builder.query({
      query: () => ({
        url: API_ENDPOINTS.AUTH.ME,
      }),
    }),

    logout: builder.mutation({
      query: () => ({
        url: API_ENDPOINTS.AUTH.LOGOUT,

        method: "POST",
      }),
    }),
  }),
});

export const { useLoginMutation, useGetMeQuery, useLogoutMutation } = authApi;
