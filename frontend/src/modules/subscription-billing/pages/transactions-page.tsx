import { useState } from "react";

import TransactionsStats from "../components/transactions/transactions-stats";

import TransactionsToolbar from "../components/transactions/transactions-toolbar";

import TransactionsTable from "../components/transactions/transactions-table";

import type { Transaction } from "../types/transaction.types";
import MarkFailedDialog from "../components/transactions/dialogs/mark-failed-dialog";
import RefundTransactionDialog from "../components/transactions/dialogs/refund-transaction-dialog";

function TransactionsPage() {
  const [selectedTransaction, setSelectedTransaction] =
    useState<Transaction | null>(null);

  const [refundOpen, setRefundOpen] = useState(false);

  const [failedOpen, setFailedOpen] = useState(false);

  const transactions: Transaction[] = [
    {
      id: "1",
      transactionId: "TRX-2026-001",
      invoiceNumber: "INV-2026-001",
      client: "Acme Corporation",
      amount: "৳ 50,000",
      paymentMethod: "Bank Transfer",
      transactionDate: "05 Jun 2026",
      status: "Success",
      gateway: "SSLCommerz",
    },

    {
      id: "2",
      transactionId: "TRX-2026-002",
      invoiceNumber: "INV-2026-002",
      client: "NextGen Solutions",
      amount: "৳ 25,000",
      paymentMethod: "bKash",
      transactionDate: "07 Jun 2026",
      status: "Failed",
      gateway: "bKash",
    },
  ];

  return (
    <>
      <div className="space-y-8">
        <div>
          <h1 className="text-4xl font-black tracking-tight">Transactions</h1>

          <p className="mt-2 text-muted-foreground">
            Monitor payment transactions, collection history and gateway
            activity.
          </p>
        </div>

        <TransactionsStats />

        <div className="rounded-[32px] border border-border bg-card/60 p-6 shadow-2xl backdrop-blur-xl lg:p-8">
          <div className="mb-8">
            <h2 className="text-2xl font-black tracking-tight">
              Transaction Directory
            </h2>

            <p className="mt-2 text-muted-foreground">
              Review all successful, failed and refunded transactions.
            </p>
          </div>

          <TransactionsToolbar />

          <div className="mt-8">
            <TransactionsTable
              transactions={transactions}
              onRefund={(transaction) => {
                setSelectedTransaction(transaction);

                setRefundOpen(true);
              }}
              onMarkFailed={(transaction) => {
                setSelectedTransaction(transaction);

                setFailedOpen(true);
              }}
            />
          </div>
        </div>
      </div>

      <RefundTransactionDialog
        open={refundOpen}
        onOpenChange={setRefundOpen}
        transaction={selectedTransaction}
      />

      <MarkFailedDialog
        open={failedOpen}
        onOpenChange={setFailedOpen}
        transaction={selectedTransaction}
      />
    </>
  );
}

export default TransactionsPage;
