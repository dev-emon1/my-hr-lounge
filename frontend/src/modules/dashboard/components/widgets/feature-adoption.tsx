import WidgetCard from "./widget-card";

const adoption = [
  {
    feature: "Attendance Tracking",
    usage: "92%",
  },

  {
    feature: "Payroll Processing",
    usage: "84%",
  },

  {
    feature: "Role Permissions",
    usage: "76%",
  },

  {
    feature: "Recruitment Pipeline",
    usage: "48%",
  },
];

function FeatureAdoption() {
  return (
    <WidgetCard>
      <div className="mb-6">
        <h3 className="text-lg font-bold">Feature Adoption</h3>

        <p className="mt-1 text-sm text-muted-foreground">
          Most adopted platform features
        </p>
      </div>

      <div className="space-y-4">
        {adoption.map((item) => (
          <div
            key={item.feature}
            className="rounded-2xl border border-border bg-background/40 p-4"
          >
            <div className="mb-3 flex items-center justify-between">
              <h4 className="font-semibold">{item.feature}</h4>

              <span className="text-sm font-bold text-primary">
                {item.usage}
              </span>
            </div>

            <div className="h-2 rounded-full bg-border">
              <div
                className="h-2 rounded-full bg-primary"
                style={{
                  width: item.usage,
                }}
              />
            </div>
          </div>
        ))}
      </div>
    </WidgetCard>
  );
}

export default FeatureAdoption;
