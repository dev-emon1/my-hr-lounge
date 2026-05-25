export type Package = {
  id: string;

  name: string;

  description: string;

  monthlyPrice: number;

  yearlyPrice: number;

  storage: string;

  employees: number;

  admins: number;

  modules: string[];

  discount?: number;

  setupFee?: number;
};
