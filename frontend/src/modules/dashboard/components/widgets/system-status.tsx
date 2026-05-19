import WidgetCard from "./widget-card";

const systems = [
  {
    name: "API Server",
    status: "Operational",
  },

  {
    name: "Database",
    status: "Healthy",
  },

  {
    name: "Storage",
    status: "Stable",
  },

  {
    name: "Queue System",
    status: "Running",
  },
];

function SystemStatus() {
  return (
    <WidgetCard>
      <div className="mb-6">
        <h3 className="text-lg font-bold">Platform Health</h3>

        <p className="mt-1 text-sm text-muted-foreground">
          Real-time infrastructure monitoring
        </p>
      </div>

      <div className="space-y-4">
        {systems.map((system) => (
          <div key={system.name} className="flex items-center justify-between">
            <div className="flex items-center gap-3">
              <div className="h-3 w-3 rounded-full bg-emerald-500" />

              <span className="font-medium">{system.name}</span>
            </div>

            <span className="text-sm text-muted-foreground">
              {system.status}
            </span>
          </div>
        ))}
      </div>
    </WidgetCard>
  );
}

export default SystemStatus;
