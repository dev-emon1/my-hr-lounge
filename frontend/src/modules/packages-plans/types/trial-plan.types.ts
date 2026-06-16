export interface TrialPlan {
  id: string;

  name: string;

  durationDays: number;

  employeeLimit: number;

  status: "Active" | "Inactive";
}
