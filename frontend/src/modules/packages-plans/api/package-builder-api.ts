import { baseApi } from "@/shared/services/api/base-api";

import { API_ENDPOINTS } from "@/shared/services/api/constants/api-endpoints";

import type {
  PackagePayload,
  PackageResponse,
} from "../types/package-builder-api.types";

export const packageBuilderApi = baseApi.injectEndpoints({
  endpoints: (builder) => ({
    createPackage: builder.mutation<PackageResponse, PackagePayload>({
      query: (payload) => ({
        url: API_ENDPOINTS.PACKAGES.LIST,
        method: "POST",
        body: payload,
      }),

      invalidatesTags: ["Packages"],
    }),

    updatePackage: builder.mutation<
      PackageResponse,
      {
        packageCode: string;

        payload: PackagePayload;
      }
    >({
      query: ({ packageCode, payload }) => ({
        url: API_ENDPOINTS.PACKAGES.DETAILS(packageCode),
        method: "PUT",
        body: payload,
      }),

      invalidatesTags: ["Packages"],
    }),

    getPackages: builder.query({
      query: () => ({
        url: API_ENDPOINTS.PACKAGES.LIST,
      }),
      providesTags: ["Packages"],
    }),

    getPackageByCode: builder.query({
      query: (packageCode) => ({
        url: API_ENDPOINTS.PACKAGES.DETAILS(packageCode),
      }),
      providesTags: ["Packages"],
    }),
  }),
});

export const {
  useCreatePackageMutation,
  useUpdatePackageMutation,
  useGetPackagesQuery,
  useGetPackageByCodeQuery,
} = packageBuilderApi;
