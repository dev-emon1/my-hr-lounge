import type { Company } from "../types/company.types";

export const mockCompanies: Company[] = [
  {
    id: "1",

    companyName: "TechNova Solutions",

    industry: "Software",

    employees: 120,

    subscription: "Enterprise",

    status: "active",
  },

  {
    id: "2",

    companyName: "Apex Holdings",

    industry: "Finance",

    employees: 85,

    subscription: "Professional",

    status: "pending",
  },

  {
    id: "3",

    companyName: "Global Logistics",

    industry: "Logistics",

    employees: 240,

    subscription: "Enterprise",

    status: "inactive",
  },
];
