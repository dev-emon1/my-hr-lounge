import { Boxes, CircleCheckBig, Archive, Users } from "lucide-react";

import { mockPackages } from "../../constants/mock-packages";

function PackagesStats() {
  const totalPackages = mockPackages.length;

  const activePackages = mockPackages.filter(
    (item) => item.status === "Active",
  ).length;

  const archivedPackages = mockPackages.filter(
    (item) => item.status === "Archived",
  ).length;

  const totalClients = mockPackages.reduce(
    (acc, item) => acc + item.activeClients,
    0,
  );

  const stats = [
    {
      title: "Total Packages",
      value: totalPackages,
      icon: Boxes,
    },

    {
      title: "Active Packages",
      value: activePackages,
      icon: CircleCheckBig,
    },

    {
      title: "Archived Packages",
      value: archivedPackages,
      icon: Archive,
    },

    {
      title: "Active Clients",
      value: totalClients,
      icon: Users,
    },
  ];

  return (
    <div className="grid gap-6 md:grid-cols-2 xl:grid-cols-4">
      {stats.map((item) => {
        const Icon = item.icon;

        return (
          <div
            key={item.title}
            className="rounded-[28px] border border-border bg-card/60 p-6 shadow-xl backdrop-blur-xl"
          >
            <div className="flex items-center justify-between">
              <div>
                <p className="text-sm text-muted-foreground">{item.title}</p>

                <h3 className="mt-3 text-3xl font-black">{item.value}</h3>
              </div>

              <div className="flex h-14 w-14 items-center justify-center rounded-2xl border border-primary/20 bg-primary/10">
                <Icon size={24} className="text-primary" />
              </div>
            </div>
          </div>
        );
      })}
    </div>
  );
}

export default PackagesStats;
