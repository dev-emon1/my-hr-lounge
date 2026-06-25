import type { PackagePayload } from "../types/package-builder-api.types";
import type { PackageBuilderFormValues } from "../types/package-builder.types";

export function transformPackagePayload(
  values: PackageBuilderFormValues,
): PackagePayload {
  return {
    name: values.packageName,

    slug: values.packageCode.trim().toLowerCase(),

    description: values.description,

    price_monthly: values.monthlyPrice,

    price_yearly: values.yearlyPrice,

    modules: values.modules.reduce(
      (acc, module) => {
        acc[module.code] = module.enabled;

        return acc;
      },
      {} as Record<string, boolean>,
    ),

    limits: {
      employees: values.limits.employees,

      admins: values.limits.admins,

      department_limit: values.limits.departmentLimit,

      branches: values.limits.branches,

      storage_gb: values.limits.storageGb,

      device_limit: values.limits.deviceLimit,
    },

    integrations: {
      zkteco: values.integrations.zkteco,

      api_access: values.integrations.apiAccess,

      whatsapp: values.integrations.whatsapp,
    },

    trial_enabled: values.trialEnabled,

    trial_duration_days: values.trialDays,

    is_active: values.status === "Published",
  };
}
