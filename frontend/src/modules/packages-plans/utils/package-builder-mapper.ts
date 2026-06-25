import type { Package } from "../types/package.types";
import type { PackageBuilder } from "../types/package-builder.types";

export function mapPackageToBuilder(pkg: Package): PackageBuilder {
  return {
    id: pkg.id,

    builderCode: pkg.slug,

    packageName: pkg.name,

    packageCode: pkg.slug,

    description: pkg.description,

    monthlyPrice: Number(pkg.price_monthly),

    yearlyPrice: Number(pkg.price_yearly),

    limits: {
      employees: pkg.limits.employees,
      admins: pkg.limits.admins,
      departmentLimit: pkg.limits.department_limit,
      branches: pkg.limits.branches,
      storageGb: pkg.limits.storage_gb,
      deviceLimit: pkg.limits.device_limit,
    },

    integrations: {
      zkteco: pkg.integrations.zkteco,
      apiAccess: pkg.integrations.api_access,
      whatsapp: pkg.integrations.whatsapp,
    },

    trialEnabled: pkg.is_trial ?? false,
    trialDays: pkg.trial_period ?? 14,

    status: pkg.is_active ? "Published" : "Draft",

    modules: [],

    createdAt: pkg.created_at,
    updatedAt: pkg.updated_at,
  };
}
