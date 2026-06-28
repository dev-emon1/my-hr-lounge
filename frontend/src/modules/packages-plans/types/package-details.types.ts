export interface PackageDetails {
  id: string;

  name: string;

  slug: string;

  description: string;

  pricing: {
    monthly: string;
    yearly: string;
  };

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

  status: {
    value: string;
    label: string;
  };

  is_trial: boolean;

  trial_period: number | null;

  created_at: string;

  updated_at: string;
}
