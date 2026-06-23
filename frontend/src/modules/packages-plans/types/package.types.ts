export type PackageStatus = "Active" | "Draft" | "Archived";

export interface Package {
  id: string;

  packageCode: string;

  packageName: string;

  description: string;

  monthlyPrice: number;

  yearlyPrice: number;

  employeeLimit: number | "Unlimited";

  branchLimit: number | "Unlimited";

  storageLimit: string;

  activeClients: number;

  status: PackageStatus;

  trialAvailable: boolean;

  createdAt: string;

  updatedAt: string;
}
