import type { TrialPlanFormValues } from "../types/trial-plan-builder.types";

export function transformTrialPlanPayload(values: TrialPlanFormValues) {
  return {
    trial_name: values.trialName,

    trial_code: values.trialCode,

    description: values.description,

    status: values.status,

    duration_days: values.durationDays,

    employee_limit: values.employeeLimit,

    modules: values.modules
      .filter((item) => item.enabled)
      .map((item) => item.code),
  };
}
