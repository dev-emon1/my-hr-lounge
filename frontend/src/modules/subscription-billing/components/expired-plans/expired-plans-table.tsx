import StatusBadge from "@/shared/components/data-display/status-badge";

import type { ExpiredSubscription } from "../../types/expired-subscription.types";

import ExpiredPlansRowActions from "./expired-plans-row-actions";

type Props = {
  subscriptions: ExpiredSubscription[];

  onReactivate: (subscription: ExpiredSubscription) => void;

  onGenerateInvoice: (subscription: ExpiredSubscription) => void;

  onContactClient: (subscription: ExpiredSubscription) => void;
};

function ExpiredPlansTable({
  subscriptions,
  onReactivate,
  onGenerateInvoice,
  onContactClient,
}: Props) {
  return (
    <div className="overflow-hidden rounded-[28px] border border-border">
      <div className="overflow-x-auto">
        <table className="w-full">
          <thead className="bg-muted/40">
            <tr>
              <th className="px-6 py-4 text-left">Client</th>

              <th className="px-6 py-4 text-left">Package</th>

              <th className="px-6 py-4 text-left">Expired Date</th>

              <th className="px-6 py-4 text-left">Days Expired</th>

              <th className="px-6 py-4 text-left">Revenue</th>

              <th className="px-6 py-4 text-left">Workspace</th>

              <th className="px-6 py-4 text-left">Status</th>

              <th className="px-6 py-4 text-right">Actions</th>
            </tr>
          </thead>

          <tbody>
            {subscriptions.map((subscription) => (
              <tr
                key={subscription.id}
                className="border-t border-border hover:bg-muted/30"
              >
                <td className="px-6 py-5 font-medium">{subscription.client}</td>

                <td className="px-6 py-5">{subscription.packageName}</td>

                <td className="px-6 py-5">{subscription.expiredDate}</td>

                <td className="px-6 py-5">{subscription.daysExpired}</td>

                <td className="px-6 py-5">{subscription.revenue}</td>

                <td className="px-6 py-5">{subscription.workspaceStatus}</td>

                <td className="px-6 py-5">
                  <StatusBadge status={subscription.status} />
                </td>

                <td className="px-6 py-5 text-right">
                  <ExpiredPlansRowActions
                    subscription={subscription}
                    onReactivate={onReactivate}
                    onGenerateInvoice={onGenerateInvoice}
                    onContactClient={onContactClient}
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

export default ExpiredPlansTable;
