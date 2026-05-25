import type { CreateClientSchema } from "../schemas/create-client-schema";

export const createClientDefaultValues: CreateClientSchema = {
  companyName: "",

  slug: "",

  email: "",

  phone: "",

  address: "",

  timezone: "Asia/Dhaka",

  packageId: "growth",

  employees: 500,

  admins: 20,

  storage: 100,

  monthlyPrice: 25000,

  yearlyPrice: 250000,

  discount: 10,

  setupFee: 5000,

  modules: ["Employee", "Attendance", "Payroll"],
};
