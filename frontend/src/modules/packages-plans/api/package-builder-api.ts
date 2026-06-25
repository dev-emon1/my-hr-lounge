import { baseApi } from "@/shared/services/api/base-api";

import { API_ENDPOINTS } from "@/shared/services/api/constants/api-endpoints";

import { Package } from "../types/package.types";

import type {
  PackagePayload,
  PackageResponse,
  PackagesListResponse,
  PackageDetailsResponse,
} from "../types/package-builder-api.types";

export const packageBuilderApi = baseApi.injectEndpoints({
  endpoints: (builder) => ({
    createPackage: builder.mutation<PackageResponse, PackagePayload>({
      query: (payload) => ({
        url: API_ENDPOINTS.PACKAGES.CREATE,
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

    getPackages: builder.query<PackagesListResponse, void>({
      query: () => ({
        url: API_ENDPOINTS.PACKAGES.LIST,
      }),

      providesTags: ["Packages"],
    }),

    getPackageBySlug: builder.query<PackageDetailsResponse, string>({
      query: (slug) => ({
        url: API_ENDPOINTS.PACKAGES.DETAILS(slug),
      }),

      providesTags: ["Packages"],
    }),
  }),
});

export const {
  useCreatePackageMutation,
  useUpdatePackageMutation,
  useGetPackagesQuery,
  useGetPackageBySlugQuery,
} = packageBuilderApi;
