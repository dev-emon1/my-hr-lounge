import { Building2, CreditCard, ShieldCheck, Users } from "lucide-react";

import WidgetCard from "./widget-card";

const activities = [
  {
    title: "New client onboarded",
    description: "Apex Holdings joined Enterprise plan",
    time: "2 minutes ago",
    icon: Building2,
  },

  {
    title: "Subscription renewed",
    description: "Vision Tech renewed Professional package",
    time: "15 minutes ago",
    icon: CreditCard,
  },

  {
    title: "HR Admin assigned",
    description: "New HR Admin assigned to Nexa Group",
    time: "1 hour ago",
    icon: Users,
  },

  {
    title: "Security policy updated",
    description: "2FA enabled for all Super Admins",
    time: "2 hours ago",
    icon: ShieldCheck,
  },
];

function ActivityFeed() {
  return (
    <WidgetCard>
      <div className="mb-6">
        <h3 className="text-lg font-bold">Recent Activities</h3>

        <p className="mt-1 text-sm text-muted-foreground">
          Latest platform operations and events
        </p>
      </div>

      <div className="space-y-5">
        {activities.map((activity) => {
          const Icon = activity.icon;

          return (
            <div key={activity.title} className="flex gap-4">
              <div className="flex h-11 w-11 items-center justify-center rounded-2xl bg-primary/10 text-primary">
                <Icon size={18} />
              </div>

              <div className="flex-1">
                <h4 className="text-sm font-semibold">{activity.title}</h4>

                <p className="mt-1 text-sm text-muted-foreground">
                  {activity.description}
                </p>

                <p className="mt-2 text-xs text-muted-foreground">
                  {activity.time}
                </p>
              </div>
            </div>
          );
        })}
      </div>
    </WidgetCard>
  );
}

export default ActivityFeed;
