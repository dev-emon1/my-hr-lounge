import type { PackageBuilderFormValues } from "../types/package-builder.types";

import type { PackagePayload } from "../types/package-builder-api.types";

export const transformPackagePayload = (
  values: PackageBuilderFormValues,
): PackagePayload => {
  return {
    packageName: values.packageName,
    packageCode: values.packageCode,
    description: values.description,

    status: values.status,

    pricing: {
      monthlyPrice: values.monthlyPrice,
      yearlyPrice: values.yearlyPrice,
    },

    limits: {
      employeeLimit: values.employeeLimit,
      branchLimit: values.branchLimit,
      storageLimit: values.storageLimit,
    },

    trial: {
      enabled: values.trialEnabled,
      trialDays: values.trialDays,
    },

    modules: values.modules.map((module) => ({
      code: module.code,
      enabled: module.enabled,

      features: module.features.map((feature) => ({
        code: feature.code,
        enabled: feature.enabled,
      })),
    })),
  };
};
