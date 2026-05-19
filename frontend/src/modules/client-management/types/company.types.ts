export type CompanyStatus = "active" | "pending" | "inactive";

export type Company = {
  id: string;

  companyName: string;

  industry: string;

  employees: number;

  subscription: string;

  status: CompanyStatus;
};
