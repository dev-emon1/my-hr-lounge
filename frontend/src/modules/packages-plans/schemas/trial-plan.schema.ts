import { z } from "zod";

export const trialPlanSchema = z.object({
  trialName: z.string().min(3, "Trial name is required"),

  trialCode: z.string().min(3, "Trial code is required"),

  description: z.string().min(10, "Description is required"),

  status: z.enum(["Draft", "Published"]),

  durationDays: z.number().min(1, "Duration is required"),

  employeeLimit: z.number().nullable(),

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
});

export type TrialPlanSchema = z.infer<typeof trialPlanSchema>;
