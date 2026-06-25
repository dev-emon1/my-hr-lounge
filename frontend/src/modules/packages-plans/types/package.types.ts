export type PackageStatus = "Active" | "Draft" | "Archived";

export interface Package {
  id: string;
  name: string;
  slug: string;
  description: string;
  price_monthly: string;
  price_yearly: string;
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

  is_active: boolean;
  is_trial: boolean | null;
  trial_period: number | null;

  created_at: string;
  updated_at: string;
}
