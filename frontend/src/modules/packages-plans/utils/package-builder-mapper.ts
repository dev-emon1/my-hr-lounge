import type { PackageDetails } from "../types/package-details.types";
import type { PackageBuilder } from "../types/package-builder.types";

export function mapPackageToBuilder(pkg: PackageDetails): PackageBuilder {
  return {
    id: pkg.id,

    builderCode: pkg.slug,

    packageName: pkg.name,

    packageCode: pkg.slug,

    description: pkg.description,

    monthlyPrice: Number(pkg.pricing.monthly),

    yearlyPrice: Number(pkg.pricing.yearly),

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

    status: pkg.status.value === "active" ? "Published" : "Draft",

    modules: [],

    createdAt: pkg.created_at,
    updatedAt: pkg.updated_at,
  };
}
