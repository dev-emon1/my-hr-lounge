import StatusBadge from "@/shared/components/data-display/status-badge";

import PendingRenewalsRowActions from "./pending-renewals-row-actions";

import type { Renewal } from "../../types/renewal.types";

type Props = {
  renewals: Renewal[];

  onRenew: (renewal: Renewal) => void;

  onReminder: (renewal: Renewal) => void;

  onGenerateInvoice: (renewal: Renewal) => void;
};

function PendingRenewalsTable({renewals, onRenew, onReminder, onGenerateInvoice}: Props) {



  return (
    <div className="overflow-hidden rounded-[28px] border border-border">
      <div className="overflow-x-auto">
        <table className="w-full">
          <thead className="bg-muted/40">
            <tr>
              <th className="px-6 py-4 text-left">Client</th>

              <th className="px-6 py-4 text-left">Package</th>

              <th className="px-6 py-4 text-left">Renewal Date</th>

              <th className="px-6 py-4 text-left">Days Left</th>

              <th className="px-6 py-4 text-left">Amount</th>

              <th className="px-6 py-4 text-left">Manager</th>

              <th className="px-6 py-4 text-left">Status</th>

              <th className="px-6 py-4 text-right">Actions</th>
            </tr>
          </thead>

          <tbody>
            {renewals.map((item) => (
              <tr
                key={item.id}
                className="border-t border-border hover:bg-muted/30"
              >
                <td className="px-6 py-5 font-medium">{item.client}</td>

                <td className="px-6 py-5">{item.packageName}</td>

                <td className="px-6 py-5">{item.renewalDate}</td>

                <td className="px-6 py-5">{item.daysLeft}</td>

                <td className="px-6 py-5">{item.amount}</td>

                <td className="px-6 py-5">{item.manager}</td>

                <td className="px-6 py-5">
                  <StatusBadge status={item.status} />
                </td>

                <td className="px-6 py-5 text-right">
                  <PendingRenewalsRowActions
                    renewal={item}
                    onRenew={onRenew}
                    onReminder={onReminder}
                    onGenerateInvoice={onGenerateInvoice}
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

export default PendingRenewalsTable;
