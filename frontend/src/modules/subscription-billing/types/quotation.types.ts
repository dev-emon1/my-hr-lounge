export interface Quotation {
  id: string;

  quotationNumber: string;

  // CLIENT
  client: string;
  contactPerson: string;
  email: string;
  phone: string;
  industry?: string;

  // PACKAGE
  packageName: string;
  billingCycle: string;

  employeeCapacity?: string;
  storageAllocation?: string;

  employeeLimit?: number;
  storageLimit?: string;
  branchLimit?: string;
  supportPlan?: string;

  // PRICING
  amount: string;

  basePrice?: number;
  addonCost?: number;
  discount?: number;
  tax?: number;
  additionalCharges?: number;
  finalPrice?: number;

  // DATES
  issueDate: string;
  expiryDate: string;
  validityDays?: number;

  // COMMERCIAL
  paymentTerms?: string;
  commercialNotes?: string;
  termsAndConditions?: string;
  internalNotes?: string;

  // MODULES
  modules?: string[];

  // STATUS
  status: "Draft" | "Sent" | "Approved" | "Converted" | "Rejected" | "Expired";

  approvalStatus?: string;
  onboardingStatus?: string;
  conversionStatus?: string;

  // TIMELINE
  timeline?: {
    id: number;
    title: string;
    date: string;
  }[];
}
