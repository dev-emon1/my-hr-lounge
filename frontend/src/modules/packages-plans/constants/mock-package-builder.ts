import type {
  PackageBuilder,
  PackageModuleAccess,
} from "../types/package-builder.types";

export const mockPackageBuilders: PackageBuilder[] = [
  {
    id: "1",
    builderCode: "PB-001",
    packageName: "Starter",
    packageCode: "PKG-STARTER",
    description: "Starter package for small organizations.",

    modules: [
      {
        code: "core-hr",
        name: "Core HR",
        enabled: true,

        features: [
          {
            code: "employee-directory",
            name: "Employee Directory",
            enabled: true,
          },

          {
            code: "departments",
            name: "Departments",
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
            code: "check-in-out",
            name: "Check In / Out",
            enabled: true,
          },
        ],
      },

      {
        code: "payroll",
        name: "Payroll",
        enabled: false,
        features: [],
      },
    ],

    monthlyPrice: 5000,
    yearlyPrice: 50000,

    limits: {
      employees: 100,
      admins: 2,
      departmentLimit: 5,
      branches: 3,
      storageGb: 50,
      deviceLimit: 5,
    },

    integrations: {
      zkteco: true,
      apiAccess: false,
      whatsapp: true,
    },

    trialEnabled: true,
    trialDays: 14,

    status: "Published",

    createdAt: "2026-01-01",
    updatedAt: "2026-06-01",
  },

  {
    id: "2",
    builderCode: "PB-002",
    packageName: "Growth",
    packageCode: "PKG-GROWTH",
    description: "Growth package for expanding businesses.",

    modules: [
      {
        code: "core-hr",
        name: "Core HR",
        enabled: true,

        features: [
          {
            code: "employee-directory",
            name: "Employee Directory",
            enabled: true,
          },

          {
            code: "departments",
            name: "Departments",
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
            code: "check-in-out",
            name: "Check In / Out",
            enabled: true,
          },
        ],
      },

      {
        code: "payroll",
        name: "Payroll",
        enabled: false,
        features: [],
      },
    ],

    monthlyPrice: 15000,
    yearlyPrice: 150000,

    limits: {
      employees: 500,
      admins: 5,
      departmentLimit: 15,
      branches: 10,
      storageGb: 200,
      deviceLimit: 20,
    },

    integrations: {
      zkteco: true,
      apiAccess: true,
      whatsapp: true,
    },

    trialEnabled: true,
    trialDays: 14,

    status: "Published",

    createdAt: "2026-01-01",
    updatedAt: "2026-06-01",
  },

  {
    id: "3",
    builderCode: "PB-003",
    packageName: "Enterprise",
    packageCode: "PKG-ENTERPRISE",
    description: "Enterprise package with full platform access.",

    modules: [
      {
        code: "core-hr",
        name: "Core HR",
        enabled: true,

        features: [
          {
            code: "employee-directory",
            name: "Employee Directory",
            enabled: true,
          },

          {
            code: "departments",
            name: "Departments",
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
            code: "check-in-out",
            name: "Check In / Out",
            enabled: true,
          },
        ],
      },

      {
        code: "payroll",
        name: "Payroll",
        enabled: false,
        features: [],
      },
    ],

    monthlyPrice: 40000,
    yearlyPrice: 400000,

    limits: {
      employees: null,
      admins: null,
      departmentLimit: null,
      branches: null,
      storageGb: 1000,
      deviceLimit: null,
    },

    integrations: {
      zkteco: true,
      apiAccess: true,
      whatsapp: true,
    },

    trialEnabled: false,
    trialDays: 0,

    status: "Published",

    createdAt: "2026-01-01",
    updatedAt: "2026-06-01",
  },
];

export const mockPackageModules: PackageModuleAccess[] = [
  {
    code: "core-hr",

    name: "Core HR",

    enabled: true,

    features: [
      {
        code: "employee-directory",

        name: "Employee Directory",

        enabled: true,
      },

      {
        code: "departments",

        name: "Departments",

        enabled: true,
      },

      {
        code: "designations",

        name: "Designations",

        enabled: true,
      },

      {
        code: "organization-chart",

        name: "Organization Chart",

        enabled: false,
      },
    ],
  },

  {
    code: "attendance",

    name: "Attendance",

    enabled: true,

    features: [
      {
        code: "check-in-out",

        name: "Check In / Out",

        enabled: true,
      },

      {
        code: "shift-management",

        name: "Shift Management",

        enabled: true,
      },

      {
        code: "attendance-report",

        name: "Attendance Reports",

        enabled: false,
      },
    ],
  },

  {
    code: "leave",

    name: "Leave Management",

    enabled: true,

    features: [
      {
        code: "leave-request",

        name: "Leave Request",

        enabled: true,
      },

      {
        code: "leave-balance",

        name: "Leave Balance",

        enabled: true,
      },

      {
        code: "leave-approval",

        name: "Leave Approval",

        enabled: false,
      },
    ],
  },

  {
    code: "payroll",

    name: "Payroll",

    enabled: false,

    features: [
      {
        code: "salary-processing",

        name: "Salary Processing",

        enabled: false,
      },

      {
        code: "payslip-generation",

        name: "Payslip Generation",

        enabled: false,
      },

      {
        code: "tax-management",

        name: "Tax Management",

        enabled: false,
      },
    ],
  },

  {
    code: "recruitment",

    name: "Recruitment",

    enabled: false,

    features: [
      {
        code: "job-posting",

        name: "Job Posting",

        enabled: false,
      },

      {
        code: "candidate-pipeline",

        name: "Candidate Pipeline",

        enabled: false,
      },
    ],
  },
];
