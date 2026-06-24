export type BuilderStatus = "Draft" | "Published" | "Archived";

export type PackageBuilderStatus = "Draft" | "Published";

export interface PackageFeatureAccess {
  code: string;

  name: string;

  enabled: boolean;
}

export interface PackageModuleAccess {
  code: string;

  name: string;

  enabled: boolean;

  features: PackageFeatureAccess[];
}

export interface PackageLimits {
  employees: number | null;

  admins: number | null;

  departmentLimit: number | null;

  branches: number | null;

  storageGb: number | null;

  deviceLimit: number | null;
}

export interface PackageIntegrations {
  zkteco: boolean;

  apiAccess: boolean;

  whatsapp: boolean;
}

export interface PackageBuilder {
  id: string;

  builderCode: string;

  packageName: string;

  packageCode: string;

  description?: string;

  modules: PackageModuleAccess[];

  monthlyPrice: number;

  yearlyPrice: number;

  limits: PackageLimits;

  integrations: PackageIntegrations;

  trialEnabled?: boolean;

  trialDays?: number;

  status: BuilderStatus;

  createdAt: string;

  updatedAt: string;
}

export interface PackageBuilderFormValues {
  packageName: string;

  packageCode: string;

  description: string;

  status: PackageBuilderStatus;

  monthlyPrice: number;

  yearlyPrice: number;

  limits: PackageLimits;

  trialEnabled: boolean;

  trialDays: number;

  modules: PackageModuleAccess[];

  integrations: PackageIntegrations;
}
