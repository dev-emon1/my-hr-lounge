export interface QuotationFormValues {
  companyName: string;

  contactPerson: string;

  email: string;

  phone: string;

  industry: string;

  validityDate: string;

  packageName: string;

  billingCycle: "monthly" | "yearly";

  employeeCapacity: string;

  storageAllocation: string;

  basePrice: number;

  discount: number;

  tax: number;

  additionalCharges: number;

  commercialNotes: string;

  paymentTerms: string;

  termsAndConditions: string;

  internalNotes: string;

  validityDays: number;
}
