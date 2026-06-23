import type { SubscriptionChange } from "../types/subscription-change.types";

export const mockSubscriptionChanges: SubscriptionChange[] = [
  {
    id: "1",

    requestNumber: "SC-2026-001",

    clientName: "Acme Corporation",

    currentPackage: "Growth",

    requestedPackage: "Enterprise",

    changeType: "Upgrade",

    effectiveDate: "2026-07-01",

    requestedBy: "John Smith",

    requestedAt: "2026-06-10",

    status: "Pending",

    estimatedAmount: 40000,

    reason:
      "Need advanced HR automation, analytics and unlimited employee capacity.",
  },

  {
    id: "2",

    requestNumber: "SC-2026-002",

    clientName: "NextGen Solutions",

    currentPackage: "Enterprise",

    requestedPackage: "Growth",

    changeType: "Downgrade",

    effectiveDate: "2026-08-01",

    requestedBy: "Sarah Ahmed",

    requestedAt: "2026-06-11",

    status: "Approved",

    estimatedAmount: -20000,

    approvedBy: "Super Admin",

    approvedAt: "2026-06-12",

    reason:
      "Client requested package optimization due to lower workforce volume.",
  },

  {
    id: "3",

    requestNumber: "SC-2026-003",

    clientName: "TechNova Ltd",

    currentPackage: "Growth",

    requestedPackage: "Growth",

    changeType: "Addon Purchase",

    effectiveDate: "2026-06-20",

    requestedBy: "Rahim Uddin",

    requestedAt: "2026-06-15",

    status: "Completed",

    estimatedAmount: 5000,

    approvedBy: "Super Admin",

    approvedAt: "2026-06-15",

    completedAt: "2026-06-20",

    reason: "Client purchased Advanced Payroll addon.",
  },

  {
    id: "4",

    requestNumber: "SC-2026-004",

    clientName: "FutureSoft",

    currentPackage: "Enterprise",

    requestedPackage: "Enterprise",

    changeType: "Addon Removal",

    effectiveDate: "2026-07-15",

    requestedBy: "Mahmud Hasan",

    requestedAt: "2026-06-14",

    status: "Rejected",

    estimatedAmount: -3000,

    reason:
      "Requested addon removal conflicts with active contract commitment.",
  },
];
