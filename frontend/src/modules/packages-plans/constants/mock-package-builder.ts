import type { PackageBuilder } from "../types/package-builder.types";
import type {
  PackageFeatureAccess,
  PackageModuleAccess,
} from "../types/package-builder.types";

export const mockPackageBuilders: PackageBuilder[] = [
  {
    id: "1",

    builderCode: "PB-001",

    packageName: "Starter",

    packageCode: "PKG-STARTER",

    description: "Starter package for small organizations.",

    modules: ["Core HR", "Attendance", "Leave"],

    monthlyPrice: 5000,

    yearlyPrice: 50000,

    employeeLimit: 100,

    branchLimit: 3,

    storageLimit: "50 GB",

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

    modules: ["Core HR", "Attendance", "Leave", "Payroll", "Recruitment"],

    monthlyPrice: 15000,

    yearlyPrice: 150000,

    employeeLimit: 500,

    branchLimit: 10,

    storageLimit: "200 GB",

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
      "Core HR",
      "Attendance",
      "Leave",
      "Payroll",
      "Recruitment",
      "Performance",
      "Assets",
      "Analytics",
    ],

    monthlyPrice: 40000,

    yearlyPrice: 400000,

    employeeLimit: null,

    branchLimit: null,

    storageLimit: "1 TB",

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
  },

  {
    code: "attendance",
    name: "Attendance",
    enabled: true,
  },

  {
    code: "leave",
    name: "Leave Management",
    enabled: true,
  },

  {
    code: "payroll",
    name: "Payroll",
    enabled: false,
  },

  {
    code: "recruitment",
    name: "Recruitment",
    enabled: false,
  },

  {
    code: "performance",
    name: "Performance",
    enabled: false,
  },

  {
    code: "assets",
    name: "Assets",
    enabled: false,
  },

  {
    code: "analytics",
    name: "Reports & Analytics",
    enabled: false,
  },
];

export const mockPackageFeatures: PackageFeatureAccess[] = [
  {
    code: "employee-self-service",
    name: "Employee Self Service",
    enabled: true,
  },

  {
    code: "mobile-app",
    name: "Mobile Application",
    enabled: true,
  },

  {
    code: "workflow-approval",
    name: "Workflow Approval",
    enabled: false,
  },

  {
    code: "advanced-reports",
    name: "Advanced Reports",
    enabled: false,
  },

  {
    code: "api-access",
    name: "API Access",
    enabled: false,
  },
];
