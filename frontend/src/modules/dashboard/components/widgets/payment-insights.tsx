import { AlertTriangle, CheckCircle2, Clock3 } from "lucide-react";

import WidgetCard from "./widget-card";

const insights = [
  {
    title: "Successful Payments",
    value: "182",
    icon: CheckCircle2,
  },

  {
    title: "Pending Renewals",
    value: "12",
    icon: Clock3,
  },

  {
    title: "Overdue Clients",
    value: "4",
    icon: AlertTriangle,
  },
];

function PaymentInsights() {
  return (
    <WidgetCard>
      <div className="mb-6">
        <h3 className="text-lg font-bold">Payment Insights</h3>

        <p className="mt-1 text-sm text-muted-foreground">
          Billing and renewal overview
        </p>
      </div>

      <div className="space-y-4">
        {insights.map((item) => {
          const Icon = item.icon;

          return (
            <div
              key={item.title}
              className="flex items-center justify-between rounded-2xl border border-border bg-background/40 p-4"
            >
              <div className="flex items-center gap-3">
                <div className="flex h-11 w-11 items-center justify-center rounded-2xl bg-primary/10 text-primary">
                  <Icon size={20} />
                </div>

                <div>
                  <p className="text-sm text-muted-foreground">{item.title}</p>

                  <h4 className="font-bold">{item.value}</h4>
                </div>
              </div>
            </div>
          );
        })}
      </div>
    </WidgetCard>
  );
}

export default PaymentInsights;
