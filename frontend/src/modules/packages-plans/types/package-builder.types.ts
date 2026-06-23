export type BuilderStatus = "Draft" | "Published" | "Archived";

export interface PackageBuilder {
  id: string;

  builderCode: string;

  packageName: string;

  packageCode: string;

  description?: string;

  modules: PackageModuleAccess[];

  monthlyPrice: number;

  yearlyPrice: number;

  employeeLimit: number | null;

  branchLimit: number | null;

  storageLimit: string;

  trialEnabled?: boolean;

  trialDays?: number;

  status: BuilderStatus;

  createdAt: string;

  updatedAt: string;
}

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

export interface PackageBuilderFormValues {
  // BASIC INFO

  packageName: string;

  packageCode: string;

  description: string;

  status: PackageBuilderStatus;

  // PRICING

  monthlyPrice: number;

  yearlyPrice: number;

  // LIMITS

  employeeLimit: number | null;

  branchLimit: number | null;

  storageLimit: string;

  // TRIAL

  trialEnabled: boolean;

  trialDays: number;

  // MODULES

  modules: PackageModuleAccess[];
}
