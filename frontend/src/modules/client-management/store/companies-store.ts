import { create } from "zustand";

import { mockCompanies } from "../data/mock-companies";

import type { Company, CompanyStatus } from "../types/company.types";

type CreateCompanyPayload = {
  companyName: string;

  industry: string;

  employees: string;

  subscription: string;
};

type UpdateCompanyPayload = {
  id: string;

  companyName: string;

  industry: string;

  employees: number;

  subscription: string;

  status: CompanyStatus;
};

type CompaniesStore = {
  companies: Company[];

  createCompany: (payload: CreateCompanyPayload) => void;

  updateCompany: (payload: UpdateCompanyPayload) => void;

  deleteCompany: (id: string) => void;

  deleteMultipleCompanies: (ids: string[]) => void;
};

export const useCompaniesStore = create<CompaniesStore>((set) => ({
  companies: mockCompanies,

  createCompany: (payload) =>
    set((state) => ({
      companies: [
        {
          id: crypto.randomUUID(),

          companyName: payload.companyName,

          industry: payload.industry,

          employees: Number(payload.employees),

          subscription: payload.subscription,

          status: "pending",
        },

        ...state.companies,
      ],
    })),

  updateCompany: (payload) =>
    set((state) => ({
      companies: state.companies.map((company) =>
        company.id === payload.id ? payload : company,
      ),
    })),

  deleteCompany: (id) =>
    set((state) => ({
      companies: state.companies.filter((company) => company.id !== id),
    })),

  deleteMultipleCompanies: (ids) =>
    set((state) => ({
      companies: state.companies.filter((company) => !ids.includes(company.id)),
    })),
}));
