import WidgetCard from "./widget-card";

const sessions = [
  {
    label: "Active Sessions",
    value: "1,284",
  },

  {
    label: "Online HR Admins",
    value: "84",
  },

  {
    label: "Connected Clients",
    value: "192",
  },

  {
    label: "Live Operations",
    value: "428",
  },
];

function ActiveSessions() {
  return (
    <WidgetCard>
      <div className="mb-6">
        <h3 className="text-lg font-bold">Active Sessions</h3>

        <p className="mt-1 text-sm text-muted-foreground">
          Current platform engagement
        </p>
      </div>

      <div className="grid grid-cols-2 gap-4">
        {sessions.map((item) => (
          <div
            key={item.label}
            className="rounded-2xl border border-border bg-background/40 p-4"
          >
            <p className="text-sm text-muted-foreground">{item.label}</p>

            <h4 className="mt-2 text-2xl font-black">{item.value}</h4>
          </div>
        ))}
      </div>
    </WidgetCard>
  );
}

export default ActiveSessions;
