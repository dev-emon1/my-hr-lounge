import WidgetCard from "./widget-card";

const clients = [
  {
    name: "Apex Holdings",
    plan: "Enterprise",
    employees: 420,
    status: "Active",
  },

  {
    name: "Vision Tech",
    plan: "Professional",
    employees: 180,
    status: "Active",
  },

  {
    name: "Nexa Group",
    plan: "Business",
    employees: 96,
    status: "Pending",
  },
];

function RecentClients() {
  return (
    <WidgetCard>
      <div className="mb-6">
        <h3 className="text-lg font-bold">Recent Clients</h3>

        <p className="mt-1 text-sm text-muted-foreground">
          Recently onboarded organizations
        </p>
      </div>

      <div className="space-y-4">
        {clients.map((client) => (
          <div
            key={client.name}
            className="flex items-center justify-between rounded-2xl border border-border p-4"
          >
            <div>
              <h4 className="font-semibold">{client.name}</h4>

              <p className="mt-1 text-sm text-muted-foreground">
                {client.plan} • {client.employees} employees
              </p>
            </div>

            <div className="rounded-full bg-primary/10 px-3 py-1 text-xs font-semibold text-primary">
              {client.status}
            </div>
          </div>
        ))}
      </div>
    </WidgetCard>
  );
}

export default RecentClients;
