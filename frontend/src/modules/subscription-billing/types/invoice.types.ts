export interface Invoice {
  id: string;

  invoiceNumber: string;

  client: string;

  type: string;

  amount: string;

  issueDate: string;

  dueDate: string;

  status: string;

  email: string;
}
