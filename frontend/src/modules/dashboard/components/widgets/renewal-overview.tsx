import WidgetCard from "./widget-card";

const renewals = [
  {
    company: "Apex Holdings",
    expires: "5 days left",
  },

  {
    company: "Vision Tech",
    expires: "12 days left",
  },

  {
    company: "Nexa Group",
    expires: "18 days left",
  },
];

function RenewalOverview() {
  return (
    <WidgetCard>
      <div className="mb-6">
        <h3 className="text-lg font-bold">Upcoming Renewals</h3>

        <p className="mt-1 text-sm text-muted-foreground">
          Clients nearing subscription expiry
        </p>
      </div>

      <div className="space-y-4">
        {renewals.map((item) => (
          <div
            key={item.company}
            className="flex items-center justify-between rounded-2xl border border-border bg-background/40 p-4"
          >
            <div>
              <h4 className="font-semibold">{item.company}</h4>

              <p className="mt-1 text-sm text-muted-foreground">
                Renewal required soon
              </p>
            </div>

            <div className="rounded-full bg-amber-500/10 px-3 py-1 text-xs font-semibold text-amber-500">
              {item.expires}
            </div>
          </div>
        ))}
      </div>
    </WidgetCard>
  );
}

export default RenewalOverview;
