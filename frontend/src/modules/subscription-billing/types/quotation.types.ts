export interface Quotation {
  id: string;
  quotationNumber: string;
  client: string;
  contactPerson: string;
  email: string;
  phone: string;
  packageName: string;
  billingCycle: string;
  amount: string;
  issueDate: string;
  expiryDate: string;
  status: "Draft" | "Sent" | "Approved" | "Converted" | "Rejected" | "Expired";
}
