export type TrialPlanStatus = "Active" | "Inactive";

export interface TrialFeatureAccess {
  code: string;

  name: string;

  enabled: boolean;
}

export interface TrialModuleAccess {
  code: string;

  name: string;

  enabled: boolean;

  features: TrialFeatureAccess[];
}

export interface TrialPlan {
  id: string;

  trialCode: string;

  trialName: string;

  description: string;

  durationDays: number;

  employeeLimit: number;

  modules: TrialModuleAccess[];

  status: TrialPlanStatus;

  createdAt: string;

  updatedAt: string;
}
