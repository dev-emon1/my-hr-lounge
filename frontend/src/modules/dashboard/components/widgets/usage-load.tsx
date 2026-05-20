import WidgetCard from "./widget-card";

const load = [
  {
    label: "Peak Usage Time",
    value: "10AM - 1PM",
  },

  {
    label: "Average Daily Sessions",
    value: "4.2K",
  },

  {
    label: "Concurrent Users",
    value: "682",
  },

  {
    label: "API Requests",
    value: "28K/day",
  },
];

function UsageLoad() {
  return (
    <WidgetCard>
      <div className="mb-6">
        <h3 className="text-lg font-bold">Usage Load</h3>

        <p className="mt-1 text-sm text-muted-foreground">
          Real-time operational load metrics
        </p>
      </div>

      <div className="space-y-4">
        {load.map((item) => (
          <div
            key={item.label}
            className="flex items-center justify-between rounded-2xl border border-border bg-background/40 p-4"
          >
            <span className="font-medium">{item.label}</span>

            <span className="text-sm font-bold text-primary">{item.value}</span>
          </div>
        ))}
      </div>
    </WidgetCard>
  );
}

export default UsageLoad;
