import { baseApi } from "../base-api";

export const companyApi = baseApi.injectEndpoints({
  endpoints: (builder) => ({
    getCompanies: builder.query({
      queryFn: async () => {
        return {
          data: [],
        };
      },

      providesTags: ["Company"],
    }),
  }),
});

export const { useGetCompaniesQuery } = companyApi;
