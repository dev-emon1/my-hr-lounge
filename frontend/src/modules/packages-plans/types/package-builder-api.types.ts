export type PackageResponse = {
  success: boolean;
  message: string;

  data: {
    id: string;
    packageCode: string;
  };
};

export type PackagePayload = {
  packageName: string;
  packageCode: string;
  description: string;
  status: "Draft" | "Published";

  pricing: {
    monthlyPrice: number;
    yearlyPrice: number;
  };

  limits: {
    employeeLimit: number | null;
    branchLimit: number | null;
    storageLimit: string;
  };

  trial: {
    enabled: boolean;
    trialDays: number;
  };

  modules: {
    code: string;
    enabled: boolean;

    features: {
      code: string;
      enabled: boolean;
    }[];
  }[];
};
