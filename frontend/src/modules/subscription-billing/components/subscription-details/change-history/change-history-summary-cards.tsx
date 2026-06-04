import { ArrowUpCircle, RefreshCw, Package, History } from "lucide-react";

import { Card } from "@/shared/ui/card";

function ChangeHistorySummaryCards() {
  const stats = [
    {
      title: "Total Changes",
      value: "18",
      icon: History,
    },

    {
      title: "Renewals",
      value: "8",
      icon: RefreshCw,
    },

    {
      title: "Upgrades",
      value: "6",
      icon: ArrowUpCircle,
    },

    {
      title: "Addon Purchases",
      value: "4",
      icon: Package,
    },
  ];

  return (
    <div className="grid gap-5 md:grid-cols-2 xl:grid-cols-4">
      {stats.map((item) => {
        const Icon = item.icon;

        return (
          <Card key={item.title} className="rounded-[24px] border-border p-6">
            <div className="flex items-start justify-between">
              <div>
                <p className="text-sm text-muted-foreground">{item.title}</p>

                <h3 className="mt-3 text-2xl font-black">{item.value}</h3>
              </div>

              <div className="flex h-12 w-12 items-center justify-center rounded-xl bg-primary/10 text-primary">
                <Icon size={22} />
              </div>
            </div>
          </Card>
        );
      })}
    </div>
  );
}

export default ChangeHistorySummaryCards;
