import { Archive, RotateCcw, Trash2, Database } from "lucide-react";

import { Card } from "@/shared/ui/card";

function ArchivedClientsStats() {
  const stats = [
    {
      title: "Archived Clients",
      value: "42",
      icon: Archive,
    },

    {
      title: "Restored This Month",
      value: "8",
      icon: RotateCcw,
    },

    {
      title: "Pending Deletion",
      value: "3",
      icon: Trash2,
    },

    {
      title: "Archived Storage",
      value: "1.2 TB",
      icon: Database,
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

export default ArchivedClientsStats;
