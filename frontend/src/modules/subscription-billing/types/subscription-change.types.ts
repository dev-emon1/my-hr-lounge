export type SubscriptionChangeType =
  | "Upgrade"
  | "Downgrade"
  | "Addon Purchase"
  | "Addon Removal"
  | "Renewal";

export type SubscriptionChangeStatus =
  | "Pending"
  | "Approved"
  | "Rejected"
  | "Completed";

export interface SubscriptionChange {
  id: string;

  requestNumber: string;

  clientName: string;

  currentPackage: string;

  requestedPackage: string;

  changeType: SubscriptionChangeType;

  effectiveDate: string;

  requestedBy: string;

  requestedAt: string;

  status: SubscriptionChangeStatus;

  estimatedAmount: number;

  reason?: string;

  approvedBy?: string;

  approvedAt?: string;

  completedAt?: string;
}
