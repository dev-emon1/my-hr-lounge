import type { Addon } from "../types/addon.types";

export const mockAddons: Addon[] = [
  {
    id: "1",

    name: "Advanced Payroll",

    code: "ADP",

    category: "Payroll",

    description:
      "Advanced payroll automation, tax processing and salary management.",

    price: 5000,

    billingType: "Monthly",

    status: "Active",

    clientsUsing: 24,

    revenue: 120000,

    features: [
      "Payroll Automation",
      "Tax Management",
      "Salary Processing",
      "Payslip Generation",
    ],

    subscribedClients: [
      {
        id: "1",
        clientName: "Acme Corporation",
        subscribedDate: "2026-05-01",
      },
      {
        id: "2",
        clientName: "NextGen Solutions",
        subscribedDate: "2026-05-10",
      },
    ],

    createdAt: "2026-01-15",
  },

  {
    id: "2",

    name: "Recruitment Pro",

    code: "REC",

    category: "Recruitment",

    description:
      "Advanced hiring pipeline, candidate tracking and interview workflow.",

    price: 8000,

    billingType: "Monthly",

    status: "Active",

    clientsUsing: 18,

    revenue: 144000,

    features: [
      "Candidate Pipeline",
      "Interview Tracking",
      "Job Posting",
      "Hiring Analytics",
    ],

    subscribedClients: [
      {
        id: "3",
        clientName: "Global Tech",
        subscribedDate: "2026-04-15",
      },
    ],

    createdAt: "2026-02-01",
  },

  {
    id: "3",
    name: "Biometric Integration",
    code: "BIO",
    category: "Attendance",
    description: "Connect biometric devices for real-time attendance sync.",
    price: 12000,
    billingType: "One Time",
    status: "Inactive",
    clientsUsing: 8,
    revenue: 96000,
    features: ["Fingerprint Support", "Face Recognition", "Attendance Sync"],
    subscribedClients: [],
    createdAt: "2026-03-10",
  },
];
