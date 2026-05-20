import WidgetCard from "./widget-card";

const metrics = [
  {
    label: "CPU Usage",
    value: "42%",
  },

  {
    label: "Memory Usage",
    value: "68%",
  },

  {
    label: "Network Load",
    value: "28%",
  },

  {
    label: "API Response",
    value: "124ms",
  },
];

function PerformanceMetrics() {
  return (
    <WidgetCard>
      <div className="mb-6">
        <h3 className="text-lg font-bold">Performance Metrics</h3>

        <p className="mt-1 text-sm text-muted-foreground">
          Live infrastructure performance insights
        </p>
      </div>

      <div className="space-y-4">
        {metrics.map((metric) => (
          <div
            key={metric.label}
            className="rounded-2xl border border-border bg-background/40 p-4"
          >
            <div className="mb-3 flex items-center justify-between">
              <span className="font-medium">{metric.label}</span>

              <span className="text-sm font-bold text-primary">
                {metric.value}
              </span>
            </div>

            <div className="h-2 rounded-full bg-border">
              <div
                className="h-2 rounded-full bg-primary"
                style={{
                  width: metric.value,
                }}
              />
            </div>
          </div>
        ))}
      </div>
    </WidgetCard>
  );
}

export default PerformanceMetrics;
