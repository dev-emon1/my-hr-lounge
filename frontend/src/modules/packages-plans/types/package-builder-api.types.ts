import type { Package } from "./package.types";

export type PackageResponse = {
  success: boolean;
  message: string;

  data: {
    id: string;
    packageCode: string;
  };
};

export interface PackagePayload {
  name: string;
  slug: string;
  description: string;
  price_monthly: number;
  price_yearly: number;

  modules: Record<string, boolean>;

  limits: {
    employees: number | null;
    admins: number | null;
    department_limit: number | null;
    branches: number | null;
    storage_gb: number | null;
    device_limit: number | null;
  };

  integrations: {
    zkteco: boolean;
    api_access: boolean;
    whatsapp: boolean;
  };

  trial_enabled: boolean;
  trial_duration_days: number;

  is_active: boolean;
}

export type PackagesListResponse = {
  success: boolean;
  message: string;
  data: Package[];
};

export type PackageDetailsResponse = {
  success: boolean;
  message: string;
  data: Package;
};
