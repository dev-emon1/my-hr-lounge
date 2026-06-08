import StatusBadge from "@/shared/components/data-display/status-badge";

import type { Transaction } from "../../types/transaction.types";

import TransactionsRowActions from "./transactions-row-actions";

type Props = {
  transactions: Transaction[];

  onRefund: (transaction: Transaction) => void;

  onMarkFailed: (transaction: Transaction) => void;
};

function TransactionsTable({ transactions, onRefund, onMarkFailed }: Props) {
  return (
    <div className="overflow-hidden rounded-[28px] border border-border">
      <div className="overflow-x-auto">
        <table className="w-full">
          <thead className="bg-muted/40">
            <tr>
              <th className="px-6 py-4 text-left">Transaction ID</th>

              <th className="px-6 py-4 text-left">Invoice</th>

              <th className="px-6 py-4 text-left">Client</th>

              <th className="px-6 py-4 text-left">Amount</th>

              <th className="px-6 py-4 text-left">Method</th>

              <th className="px-6 py-4 text-left">Gateway</th>

              <th className="px-6 py-4 text-left">Date</th>

              <th className="px-6 py-4 text-left">Status</th>

              <th className="px-6 py-4 text-right">Actions</th>
            </tr>
          </thead>

          <tbody>
            {transactions.map((transaction) => (
              <tr
                key={transaction.id}
                className="border-t border-border hover:bg-muted/30"
              >
                <td className="px-6 py-5 font-medium">
                  {transaction.transactionId}
                </td>

                <td className="px-6 py-5">{transaction.invoiceNumber}</td>

                <td className="px-6 py-5">{transaction.client}</td>

                <td className="px-6 py-5">{transaction.amount}</td>

                <td className="px-6 py-5">{transaction.paymentMethod}</td>

                <td className="px-6 py-5">{transaction.gateway}</td>

                <td className="px-6 py-5">{transaction.transactionDate}</td>

                <td className="px-6 py-5">
                  <StatusBadge status={transaction.status} />
                </td>

                <td className="px-6 py-5 text-right">
                  <TransactionsRowActions
                    transaction={transaction}
                    onRefund={onRefund}
                    onMarkFailed={onMarkFailed}
                  />
                </td>
              </tr>
            ))}
          </tbody>
        </table>
      </div>
    </div>
  );
}

export default TransactionsTable;
