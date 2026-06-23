import { z } from "zod";

export const packageBuilderSchema = z
  .object({
    packageName: z.string().min(3, "Package name is required"),

    packageCode: z.string().min(3, "Package code is required"),

    description: z.string().min(10, "Description is required"),

    status: z.enum(["Draft", "Published"]),

    monthlyPrice: z.number().min(1, "Monthly price must be greater than 0"),

    yearlyPrice: z.number().min(1, "Yearly price must be greater than 0"),

    employeeLimit: z.number().nullable(),

    branchLimit: z.number().nullable(),

    storageLimit: z.string().min(1, "Storage limit is required"),

    trialEnabled: z.boolean(),

    trialDays: z.number(),

    modules: z.array(
      z.object({
        code: z.string(),

        name: z.string(),

        enabled: z.boolean(),

        features: z.array(
          z.object({
            code: z.string(),

            name: z.string(),

            enabled: z.boolean(),
          }),
        ),
      }),
    ),
  })
  .superRefine((data, ctx) => {
    const enabledModules = data.modules.filter((module) => module.enabled);

    if (enabledModules.length === 0) {
      ctx.addIssue({
        code: z.ZodIssueCode.custom,

        message: "At least one module must be enabled",

        path: ["modules"],
      });
    }

    if (data.trialEnabled && data.trialDays <= 0) {
      ctx.addIssue({
        code: z.ZodIssueCode.custom,

        message: "Trial days must be greater than 0",

        path: ["trialDays"],
      });
    }
  });

export type PackageBuilderSchema = z.infer<typeof packageBuilderSchema>;
