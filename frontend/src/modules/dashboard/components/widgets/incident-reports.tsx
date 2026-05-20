import WidgetCard from "./widget-card";

const incidents = [
  {
    title: "Database latency spike",
    time: "2 hours ago",
    severity: "Medium",
  },

  {
    title: "Failed login detection",
    time: "5 hours ago",
    severity: "Low",
  },

  {
    title: "API timeout resolved",
    time: "Yesterday",
    severity: "Resolved",
  },
];

function IncidentReports() {
  return (
    <WidgetCard>
      <div className="mb-6">
        <h3 className="text-lg font-bold">Incident Reports</h3>

        <p className="mt-1 text-sm text-muted-foreground">
          Recent infrastructure incidents and alerts
        </p>
      </div>

      <div className="space-y-4">
        {incidents.map((incident) => (
          <div
            key={incident.title}
            className="rounded-2xl border border-border bg-background/40 p-4"
          >
            <div className="mb-3 flex items-center justify-between">
              <h4 className="font-semibold">{incident.title}</h4>

              <span className="rounded-full bg-primary/10 px-3 py-1 text-xs font-semibold text-primary">
                {incident.severity}
              </span>
            </div>

            <p className="text-sm text-muted-foreground">{incident.time}</p>
          </div>
        ))}
      </div>
    </WidgetCard>
  );
}

export default IncidentReports;
