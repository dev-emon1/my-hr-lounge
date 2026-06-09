import StatusBadge from "@/shared/components/data-display/status-badge";

import type { Quotation } from "../../types/quotation.types";

import QuotationsRowActions from "./quotations-row-actions";

type Props = {
  quotations: Quotation[];

  onSend: (quotation: Quotation) => void;

  onApprove: (quotation: Quotation) => void;

  onReject: (quotation: Quotation) => void;
  onStartOnboarding: (quotation: Quotation) => void;
};

function QuotationsTable({
  quotations,
  onSend,
  onApprove,
  onStartOnboarding,
  onReject,
}: Props) {
  return (
    <div className="overflow-hidden rounded-[28px] border border-border">
      <div className="overflow-x-auto">
        <table className="w-full">
          <thead className="bg-muted/40">
            <tr>
              <th className="px-6 py-4 text-left">Quotation No</th>

              <th className="px-6 py-4 text-left">Client</th>

              <th className="px-6 py-4 text-left">Package</th>

              <th className="px-6 py-4 text-left">Amount</th>

              <th className="px-6 py-4 text-left">Issue Date</th>

              <th className="px-6 py-4 text-left">Expiry Date</th>

              <th className="px-6 py-4 text-left">Status</th>

              <th className="px-6 py-4 text-right">Actions</th>
            </tr>
          </thead>

          <tbody>
            {quotations.map((quotation) => (
              <tr
                key={quotation.id}
                className="border-t border-border hover:bg-muted/30"
              >
                <td className="px-6 py-5 font-medium">
                  {quotation.quotationNumber}
                </td>

                <td className="px-6 py-5">{quotation.client}</td>

                <td className="px-6 py-5">{quotation.packageName}</td>

                <td className="px-6 py-5">{quotation.amount}</td>

                <td className="px-6 py-5">{quotation.issueDate}</td>

                <td className="px-6 py-5">{quotation.expiryDate}</td>

                <td className="px-6 py-5">
                  <StatusBadge status={quotation.status} />
                </td>

                <td className="px-6 py-5 text-right">
                  <QuotationsRowActions
                    quotation={quotation}
                    onSend={onSend}
                    onApprove={onApprove}
                    onReject={onReject}
                    onStartOnboarding={onStartOnboarding}
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

export default QuotationsTable;
