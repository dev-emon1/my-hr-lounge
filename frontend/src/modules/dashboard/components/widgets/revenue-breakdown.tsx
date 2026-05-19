import WidgetCard from "./widget-card";

const breakdown = [
  {
    plan: "Enterprise",
    revenue: "$22,400",
    clients: 48,
  },

  {
    plan: "Professional",
    revenue: "$14,800",
    clients: 72,
  },

  {
    plan: "Business",
    revenue: "$8,600",
    clients: 38,
  },

  {
    plan: "Starter",
    revenue: "$2,400",
    clients: 20,
  },
];

function RevenueBreakdown() {
  return (
    <WidgetCard>
      <div className="mb-6">
        <h3 className="text-lg font-bold">Revenue By Package</h3>

        <p className="mt-1 text-sm text-muted-foreground">
          Package-wise revenue distribution
        </p>
      </div>

      <div className="space-y-4">
        {breakdown.map((item) => (
          <div
            key={item.plan}
            className="rounded-2xl border border-border bg-background/40 p-4"
          >
            <div className="mb-3 flex items-center justify-between">
              <h4 className="font-semibold">{item.plan}</h4>

              <span className="text-lg font-black text-primary">
                {item.revenue}
              </span>
            </div>

            <div className="flex items-center justify-between text-sm text-muted-foreground">
              <span>{item.clients} clients</span>

              <span>Active subscriptions</span>
            </div>
          </div>
        ))}
      </div>
    </WidgetCard>
  );
}

export default RevenueBreakdown;
