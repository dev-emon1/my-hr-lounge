import { Activity, AlertTriangle, Building2, Users } from "lucide-react";

import { Card } from "@/shared/ui/card";

function ActivityStats() {
  const stats = [
    {
      title: "Total Activities",
      value: "284,912",
      icon: Activity,
    },

    {
      title: "Today's Activities",
      value: "12,458",
      icon: Users,
    },

    {
      title: "Failed Activities",
      value: "89",
      icon: AlertTriangle,
    },

    {
      title: "Active Clients",
      value: "112",
      icon: Building2,
    },
  ];

  return (
    <div className="grid gap-5 md:grid-cols-2 xl:grid-cols-4">
      {stats.map((item) => {
        const Icon = item.icon;

        return (
          <Card
            key={item.title}
            className="rounded-[28px] border-border bg-card/60 p-6"
          >
            <div className="flex items-start justify-between">
              <div>
                <p className="text-sm text-muted-foreground">{item.title}</p>

                <h3 className="mt-4 text-3xl font-black">{item.value}</h3>
              </div>

              <div className="flex h-14 w-14 items-center justify-center rounded-2xl bg-primary/10 text-primary">
                <Icon size={24} />
              </div>
            </div>
          </Card>
        );
      })}
    </div>
  );
}

export default ActivityStats;
