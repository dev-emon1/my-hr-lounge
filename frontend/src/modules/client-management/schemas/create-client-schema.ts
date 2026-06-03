import { z } from "zod";

export const createClientSchema = z.object({
  companyName: z.string().min(2, "Company name is required"),

  slug: z.string().min(2, "Workspace slug is required"),

  email: z.string().email("Invalid email address"),

  phone: z.string().min(6, "Phone number is required"),

  address: z.string().optional(),

  timezone: z.string(),

  packageId: z.string(),

  employees: z.number(),

  admins: z.number(),

  storage: z.number(),

  monthlyPrice: z.number(),

  yearlyPrice: z.number(),

  discount: z.number(),

  setupFee: z.number(),

  modules: z.array(z.string()),
});

export type CreateClientSchema = z.infer<typeof createClientSchema>;
