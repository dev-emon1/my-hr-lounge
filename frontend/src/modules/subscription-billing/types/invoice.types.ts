export interface Invoice {
  id: string;

  invoiceNumber: string;

  client: string;

  email: string;

  amount: string;

  issueDate: string;

  dueDate: string;

  status: string;

  type: string;
}
