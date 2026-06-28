export interface PackageListItem {
  id: string;

  name: string;

  slug: string;

  pricing: {
    monthly: string;
    yearly: string;
  };

  limits: {
    employees: number | null;
  };

  is_trial: boolean;

  status: {
    value: string;
    label: string;
  };

  created_at: string;
}
