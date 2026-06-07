import {
  CreditCard,
  CircleDollarSign,
  Building2,
  Sparkles,
} from "lucide-react";

import { Card } from "@/shared/ui/card";

function ActiveSubscriptionsStats() {
  const stats = [
    {
      title: "Active Subscriptions",
      value: "128",
      icon: CreditCard,
    },

    {
      title: "Monthly Revenue",
      value: "$42,500",
      icon: CircleDollarSign,
    },

    {
      title: "Annual Revenue",
      value: "$510,000",
      icon: Building2,
    },

    {
      title: "Trial Clients",
      value: "12",
      icon: Sparkles,
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

export default ActiveSubscriptionsStats;
