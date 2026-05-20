import WidgetCard from "./widget-card";

const uptime = [
  {
    service: "API Server",
    value: "99.99%",
  },

  {
    service: "Database",
    value: "99.97%",
  },

  {
    service: "Authentication",
    value: "100%",
  },

  {
    service: "Storage",
    value: "99.94%",
  },
];

function ServiceUptime() {
  return (
    <WidgetCard>
      <div className="mb-6">
        <h3 className="text-lg font-bold">Service Uptime</h3>

        <p className="mt-1 text-sm text-muted-foreground">
          Infrastructure availability metrics
        </p>
      </div>

      <div className="space-y-4">
        {uptime.map((item) => (
          <div
            key={item.service}
            className="flex items-center justify-between rounded-2xl border border-border bg-background/40 p-4"
          >
            <span className="font-medium">{item.service}</span>

            <span className="text-sm font-bold text-emerald-500">
              {item.value}
            </span>
          </div>
        ))}
      </div>
    </WidgetCard>
  );
}

export default ServiceUptime;
