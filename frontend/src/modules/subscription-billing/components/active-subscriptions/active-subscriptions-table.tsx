import SubscriptionRowActions from "./subscription-row-actions";
import type { Subscription } from "../../types/subscription.types";

type Props = {
  subscriptions: Subscription[];

  onRenew: (subscription: Subscription) => void;

  onUpgrade: (subscription: Subscription) => void;

  onGenerateInvoice: (subscription: Subscription) => void;
};

function ActiveSubscriptionsTable({
  subscriptions,
  onRenew,
  onUpgrade,
  onGenerateInvoice,
}: Props) {
  return (
    <div className="overflow-hidden rounded-[28px] border border-border">
      <div className="overflow-x-auto">
        <table className="w-full">
          <thead className="bg-muted/40">
            <tr>
              <th className="px-6 py-4 text-left">Client</th>

              <th className="px-6 py-4 text-left">Package</th>

              <th className="px-6 py-4 text-left">Billing Cycle</th>

              <th className="px-6 py-4 text-left">Start Date</th>

              <th className="px-6 py-4 text-left">Expiry Date</th>

              <th className="px-6 py-4 text-left">Revenue</th>

              <th className="px-6 py-4 text-left">Status</th>

              <th className="px-6 py-4 text-right">Actions</th>
            </tr>
          </thead>

          <tbody>
            {subscriptions.map((item) => (
              <tr
                key={item.id}
                className="border-t border-border hover:bg-muted/30"
              >
                <td className="px-6 py-5 font-medium">{item.client}</td>

                <td className="px-6 py-5">{item.packageName}</td>

                <td className="px-6 py-5">{item.billingCycle}</td>

                <td className="px-6 py-5">{item.startDate}</td>

                <td className="px-6 py-5">{item.expiryDate}</td>

                <td className="px-6 py-5">{item.revenue}</td>

                <td className="px-6 py-5">
                  <span className="rounded-full bg-green-500/10 px-3 py-1 text-xs font-semibold text-green-600">
                    {item.status}
                  </span>
                </td>

                <td className="px-6 py-5 text-right">
                  <SubscriptionRowActions
                    subscription={item}
                    onRenew={onRenew}
                    onUpgrade={onUpgrade}
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

export default ActiveSubscriptionsTable;
