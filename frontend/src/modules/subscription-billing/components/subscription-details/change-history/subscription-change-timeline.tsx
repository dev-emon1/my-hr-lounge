import { ArrowUpCircle, RefreshCw, Package } from "lucide-react";

function SubscriptionChangeTimeline() {
  const timeline = [
    {
      title: "Package Upgraded",
      description: "Growth → Enterprise",
      date: "12 May 2026",
      icon: ArrowUpCircle,
    },

    {
      title: "Subscription Renewed",
      description: "Yearly Renewal Completed",
      date: "01 Jan 2026",
      icon: RefreshCw,
    },

    {
      title: "Addon Purchased",
      description: "Extra Employee Slots +200",
      date: "15 Oct 2025",
      icon: Package,
    },
  ];

  return (
    <div className="rounded-[28px] border border-border p-6">
      <h3 className="text-xl font-black">Change Timeline</h3>

      <div className="mt-8 space-y-6">
        {timeline.map((item) => {
          const Icon = item.icon;

          return (
            <div key={`${item.title}-${item.date}`} className="flex gap-4">
              <div className="flex h-12 w-12 items-center justify-center rounded-2xl bg-primary/10 text-primary">
                <Icon size={20} />
              </div>

              <div>
                <h4 className="font-semibold">{item.title}</h4>

                <p className="text-sm text-muted-foreground">
                  {item.description}
                </p>

                <p className="mt-1 text-xs text-muted-foreground">
                  {item.date}
                </p>
              </div>
            </div>
          );
        })}
      </div>
    </div>
  );
}

export default SubscriptionChangeTimeline;
