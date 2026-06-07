import { Building2, Package, Crown, Sparkles, Wallet } from "lucide-react";

import { Card } from "@/shared/ui/card";

function PackageAssignmentStats() {
  const stats = [
    {
      title: "Assigned Clients",

      value: "128",

      icon: Building2,
    },

    {
      title: "Enterprise Clients",

      value: "42",

      icon: Crown,
    },

    {
      title: "Custom Plans",

      value: "17",

      icon: Sparkles,
    },

    {
      title: "MRR",

      value: "৳ 4.2M",

      icon: Wallet,
    },
  ];

  return (
    <div className="grid gap-5 md:grid-cols-2 xl:grid-cols-4">
      {stats.map((item) => {
        const Icon = item.icon;

        return (
          <Card
            key={item.title}
            className="rounded-[28px] border-border bg-card/60 p-6 backdrop-blur-xl"
          >
            <div className="flex items-start justify-between">
              <div>
                <p className="text-sm text-muted-foreground">{item.title}</p>

                <h3 className="mt-4 text-3xl font-black tracking-tight">
                  {item.value}
                </h3>
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

export default PackageAssignmentStats;
