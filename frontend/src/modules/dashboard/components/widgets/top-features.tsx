import WidgetCard from "./widget-card";

const features = [
  {
    feature: "Attendance",
    users: "12.4K users",
  },

  {
    feature: "Payroll",
    users: "8.2K users",
  },

  {
    feature: "Employee Management",
    users: "18.4K users",
  },

  {
    feature: "Leave Requests",
    users: "6.9K users",
  },
];

function TopFeatures() {
  return (
    <WidgetCard>
      <div className="mb-6">
        <h3 className="text-lg font-bold">Top Features</h3>

        <p className="mt-1 text-sm text-muted-foreground">
          Highest platform engagement areas
        </p>
      </div>

      <div className="space-y-4">
        {features.map((item) => (
          <div
            key={item.feature}
            className="rounded-2xl border border-border bg-background/40 p-4"
          >
            <div className="flex items-center justify-between">
              <h4 className="font-semibold">{item.feature}</h4>

              <span className="text-sm text-muted-foreground">
                {item.users}
              </span>
            </div>
          </div>
        ))}
      </div>
    </WidgetCard>
  );
}

export default TopFeatures;
