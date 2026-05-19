import WidgetCard from "./widget-card";

const health = [
  {
    label: "Healthy Clients",
    value: "182",
    color: "bg-emerald-500",
  },

  {
    label: "At Risk",
    value: "12",
    color: "bg-amber-500",
  },

  {
    label: "Inactive",
    value: "4",
    color: "bg-red-500",
  },
];

function ClientHealth() {
  return (
    <WidgetCard>
      <div className="mb-6">
        <h3 className="text-lg font-bold">Client Health</h3>

        <p className="mt-1 text-sm text-muted-foreground">
          Overall organization engagement
        </p>
      </div>

      <div className="space-y-4">
        {health.map((item) => (
          <div
            key={item.label}
            className="flex items-center justify-between rounded-2xl border border-border bg-background/40 p-4"
          >
            <div className="flex items-center gap-3">
              <div className={`h-3 w-3 rounded-full ${item.color}`} />

              <span className="font-medium">{item.label}</span>
            </div>

            <span className="text-lg font-black">{item.value}</span>
          </div>
        ))}
      </div>
    </WidgetCard>
  );
}

export default ClientHealth;
