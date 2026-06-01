import { CheckCircle2, CreditCard, UserPlus } from "lucide-react";

function ActivityTimelineCard() {
  const activities = [
    {
      icon: UserPlus,

      title: "Client Created",

      date: "12 May 2026",
    },

    {
      icon: CreditCard,

      title: "Enterprise Package Assigned",

      date: "12 May 2026",
    },

    {
      icon: CheckCircle2,

      title: "Workspace Activated",

      date: "13 May 2026",
    },
  ];

  return (
    <div className="rounded-[28px] border border-border bg-card p-6 shadow-lg">
      <h3 className="text-xl font-black">Activity Timeline</h3>

      <div className="mt-8 space-y-6">
        {activities.map((activity) => {
          const Icon = activity.icon;

          return (
            <div key={activity.title} className="flex gap-4">
              <div className="flex h-10 w-10 items-center justify-center rounded-xl bg-primary/10 text-primary">
                <Icon size={18} />
              </div>

              <div>
                <h4 className="font-semibold">{activity.title}</h4>

                <p className="mt-1 text-sm text-muted-foreground">
                  {activity.date}
                </p>
              </div>
            </div>
          );
        })}
      </div>
    </div>
  );
}

export default ActivityTimelineCard;
