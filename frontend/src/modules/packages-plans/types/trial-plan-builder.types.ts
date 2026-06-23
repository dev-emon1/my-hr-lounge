import type { TrialModuleAccess } from "./trial-plan.types";

export type TrialPlanBuilderStatus = "Draft" | "Published";

export interface TrialPlanFormValues {
  trialName: string;

  trialCode: string;

  description: string;

  status: TrialPlanBuilderStatus;

  durationDays: number;

  employeeLimit: number | null;

  modules: TrialModuleAccess[];
}
