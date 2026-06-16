import { z } from "zod";

export const packageBuilderSchema = z.object({
  packageName: z.string().min(3, "Package name is required"),

  packageCode: z.string().min(3, "Package code is required"),

  description: z.string().min(10, "Description is required"),

  status: z.enum(["Draft", "Published"]),

  monthlyPrice: z.number().min(0),

  yearlyPrice: z.number().min(0),

  employeeLimit: z.number().nullable(),

  branchLimit: z.number().nullable(),

  storageLimit: z.string(),

  trialEnabled: z.boolean(),

  trialDays: z.number(),

  modules: z.array(
    z.object({
      code: z.string(),
      name: z.string(),
      enabled: z.boolean(),
    }),
  ),

  features: z.array(
    z.object({
      code: z.string(),
      name: z.string(),
      enabled: z.boolean(),
    }),
  ),
});

export type PackageBuilderSchema = z.infer<typeof packageBuilderSchema>;
