export type PackageType = {
  id: string;

  name: string;

  description: string;

  monthlyPrice: number;

  yearlyPrice: number;

  employees: number | "Unlimited";

  admins: number | "Unlimited";

  storage: string;

  modules: string[];

  discount?: number;

  setupFee?: number;
};

export const packageData: PackageType[] = [
  {
    id: "starter",

    name: "Starter",

    description: "Perfect for small businesses",

    monthlyPrice: 49,

    yearlyPrice: 499,

    employees: 50,

    admins: 3,

    storage: "10 GB",

    modules: ["Attendance", "Leave", "Employee Management"],
  },

  {
    id: "growth",

    name: "Growth",

    description: "For growing organizations",

    monthlyPrice: 149,

    yearlyPrice: 1499,

    employees: 250,

    admins: 10,

    storage: "100 GB",

    modules: ["Attendance", "Leave", "Payroll", "Recruitment", "Reports"],
  },

  {
    id: "enterprise",

    name: "Enterprise",

    description: "Enterprise-grade solution",

    monthlyPrice: 499,

    yearlyPrice: 4999,

    employees: "Unlimited",

    admins: "Unlimited",

    storage: "1 TB",

    modules: ["All Modules"],
  },

  {
    id: "custom",

    name: "Custom",

    description: "Fully customizable package",

    monthlyPrice: 0,

    yearlyPrice: 0,

    employees: "Unlimited",

    admins: "Unlimited",

    storage: "Custom",

    modules: [],
  },
];
