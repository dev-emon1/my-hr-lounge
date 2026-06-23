import type { TrialModuleAccess } from "../types/trial-plan.types";

export const mockTrialModules: TrialModuleAccess[] = [
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

  {
    code: "leave",

    name: "Leave Management",

    enabled: false,

    features: [
      {
        code: "leave-request",

        name: "Leave Request",

        enabled: false,
      },

      {
        code: "leave-approval",

        name: "Leave Approval",

        enabled: false,
      },
    ],
  },
];
