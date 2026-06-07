import StatusBadge from "@/shared/components/data-display/status-badge";

import type { Invoice } from "../../types/invoice.types";

import InvoicesRowActions from "./invoices-row-actions";

type Props = {
  invoices: Invoice[];

  onMarkPaid: (invoice: Invoice) => void;

  onReminder: (invoice: Invoice) => void;

  onCancel: (invoice: Invoice) => void;
};

function InvoicesTable({ invoices, onMarkPaid, onReminder, onCancel }: Props) {
  return (
    <div className="overflow-hidden rounded-[28px] border border-border">
      <div className="overflow-x-auto">
        <table className="w-full">
          <thead className="bg-muted/40">
            <tr>
              <th className="px-6 py-4 text-left">Invoice No</th>

              <th className="px-6 py-4 text-left">Client</th>

              <th className="px-6 py-4 text-left">Type</th>

              <th className="px-6 py-4 text-left">Amount</th>

              <th className="px-6 py-4 text-left">Issue Date</th>

              <th className="px-6 py-4 text-left">Due Date</th>

              <th className="px-6 py-4 text-left">Status</th>

              <th className="px-6 py-4 text-right">Actions</th>
            </tr>
          </thead>

          <tbody>
            {invoices.map((invoice) => (
              <tr
                key={invoice.id}
                className="border-t border-border hover:bg-muted/30"
              >
                <td className="px-6 py-5 font-medium">
                  {invoice.invoiceNumber}
                </td>

                <td className="px-6 py-5">{invoice.client}</td>

                <td className="px-6 py-5">{invoice.type}</td>

                <td className="px-6 py-5">{invoice.amount}</td>

                <td className="px-6 py-5">{invoice.issueDate}</td>

                <td className="px-6 py-5">{invoice.dueDate}</td>

                <td className="px-6 py-5">
                  <StatusBadge status={invoice.status} />
                </td>

                <td className="px-6 py-5 text-right">
                  <InvoicesRowActions
                    invoice={invoice}
                    onMarkPaid={onMarkPaid}
                    onReminder={onReminder}
                    onCancel={onCancel}
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

export default InvoicesTable;
