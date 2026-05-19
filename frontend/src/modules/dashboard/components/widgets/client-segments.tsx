import WidgetCard from "./widget-card";

const segments = [
  {
    title: "Enterprise Clients",
    count: 48,
    description: "Large scale organizations",
  },

  {
    title: "SME Clients",
    count: 96,
    description: "Mid-sized business clients",
  },

  {
    title: "Startup Clients",
    count: 72,
    description: "Fast growing startups",
  },

  {
    title: "Inactive Clients",
    count: 12,
    description: "Low engagement organizations",
  },
];

function ClientSegments() {
  return (
    <WidgetCard>
      <div className="mb-6">
        <h3 className="text-lg font-bold">Client Segments</h3>

        <p className="mt-1 text-sm text-muted-foreground">
          Organization category distribution
        </p>
      </div>

      <div className="space-y-4">
        {segments.map((segment) => (
          <div
            key={segment.title}
            className="rounded-2xl border border-border bg-background/40 p-4 transition-all hover:border-primary/20"
          >
            <div className="mb-3 flex items-center justify-between">
              <h4 className="font-semibold">{segment.title}</h4>

              <div className="rounded-full bg-primary/10 px-3 py-1 text-xs font-semibold text-primary">
                {segment.count}
              </div>
            </div>

            <p className="text-sm text-muted-foreground">
              {segment.description}
            </p>
          </div>
        ))}
      </div>
    </WidgetCard>
  );
}

export default ClientSegments;
