export interface Transaction {
  id: string;

  transactionId: string;

  invoiceNumber: string;

  client: string;

  amount: string;

  paymentMethod: string;

  transactionDate: string;

  status: string;

  gateway: string;
}
