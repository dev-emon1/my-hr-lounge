import type { TrialPlan } from "../types/trial-plan.types";

export const mockTrialPlans: TrialPlan[] = [
  {
    id: "1",

    trialCode: "TP-001",

    trialName: "Starter Trial",

    description: "Starter trial plan for small organizations.",

    durationDays: 14,

    employeeLimit: 25,

    modules: [
      {
        code: "core-hr",
        name: "Core HR",
        enabled: true,

        features: [
          {
            code: "employee-management",
            name: "Employee Management",
            enabled: true,
          },

          {
            code: "organization-setup",
            name: "Organization Setup",
            enabled: true,
          },
        ],
      },

      {
        code: "attendance",
        name: "Attendance",
        enabled: true,

        features: [
          {
            code: "attendance-tracking",
            name: "Attendance Tracking",
            enabled: true,
          },

          {
            code: "shift-management",
            name: "Shift Management",
            enabled: true,
          },
        ],
      },
    ],

    status: "Active",

    createdAt: "2026-01-01",

    updatedAt: "2026-01-01",
  },

  {
    id: "2",

    trialCode: "TP-002",

    trialName: "Growth Trial",

    description: "Growth trial plan for medium businesses.",

    durationDays: 30,

    employeeLimit: 100,
    modules: [
      {
        code: "core-hr",
        name: "Core HR",
        enabled: true,

        features: [
          {
            code: "employee-management",
            name: "Employee Management",
            enabled: true,
          },

          {
            code: "organization-setup",
            name: "Organization Setup",
            enabled: true,
          },
        ],
      },

      {
        code: "attendance",
        name: "Attendance",
        enabled: true,

        features: [
          {
            code: "attendance-tracking",
            name: "Attendance Tracking",
            enabled: true,
          },

          {
            code: "shift-management",
            name: "Shift Management",
            enabled: true,
          },
        ],
      },
    ],

    status: "Active",

    createdAt: "2026-01-01",

    updatedAt: "2026-01-01",
  },
];
