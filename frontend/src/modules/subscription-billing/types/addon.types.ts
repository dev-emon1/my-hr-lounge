export type AddonStatus = "Active" | "Inactive";

export type AddonBillingType = "Monthly" | "Yearly" | "One Time";

export interface AddonClient {
  id: string;
  clientName: string;
  subscribedDate: string;
}

export interface Addon {
  id: string;
  name: string;
  code: string;
  category: string;
  description: string;
  price: number;
  billingType: AddonBillingType;
  status: AddonStatus;
  clientsUsing: number;
  revenue: number;
  features: string[];
  subscribedClients: AddonClient[];
  createdAt: string;
}
