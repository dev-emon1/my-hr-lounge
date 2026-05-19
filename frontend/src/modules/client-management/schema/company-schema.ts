import { z } from "zod";

export const companySchema = z.object({
  companyName: z.string().min(3, "Company name is required"),

  industry: z.string().min(2, "Industry is required"),

  employees: z.string().min(1, "Employee count is required"),

  subscription: z.string().min(1, "Subscription is required"),
});

export type CompanyFormValues = z.infer<typeof companySchema>;
