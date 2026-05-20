import { Activity, Building2, CreditCard, Users } from "lucide-react";

import WidgetCard from "./widget-card";

const events = [
  {
    title: "New client onboarded",
    description: "Apex Holdings joined Enterprise plan",
    time: "2 min ago",
    icon: Building2,
  },

  {
    title: "Subscription upgraded",
    description: "Vision Tech upgraded to Professional",
    time: "10 min ago",
    icon: CreditCard,
  },

  {
    title: "New HR Admin assigned",
    description: "Admin assigned to Nexa Group",
    time: "18 min ago",
    icon: Users,
  },

  {
    title: "Platform activity spike",
    description: "Live sessions increased by 22%",
    time: "25 min ago",
    icon: Activity,
  },
];

function LiveEvents() {
  return (
    <WidgetCard>
      <div className="mb-6">
        <h3 className="text-lg font-bold">Live Events</h3>

        <p className="mt-1 text-sm text-muted-foreground">
          Real-time operational activities
        </p>
      </div>

      <div className="space-y-4">
        {events.map((event) => {
          const Icon = event.icon;

          return (
            <div
              key={event.title}
              className="flex gap-4 rounded-2xl border border-border bg-background/40 p-4"
            >
              <div className="flex h-11 w-11 shrink-0 items-center justify-center rounded-2xl bg-primary/10 text-primary">
                <Icon size={18} />
              </div>

              <div className="min-w-0 flex-1">
                <div className="flex items-start justify-between gap-4">
                  <div>
                    <h4 className="font-semibold">{event.title}</h4>

                    <p className="mt-1 text-sm text-muted-foreground">
                      {event.description}
                    </p>
                  </div>

                  <span className="whitespace-nowrap text-xs text-muted-foreground">
                    {event.time}
                  </span>
                </div>
              </div>
            </div>
          );
        })}
      </div>
    </WidgetCard>
  );
}

export default LiveEvents;
