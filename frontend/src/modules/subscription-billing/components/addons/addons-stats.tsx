import type { Addon } from "../../types/addon.types";

type Props = {
  addons: Addon[];
};

function AddonsStats({ addons }: Props) {
  const totalAddons = addons.length;

  const activeAddons = addons.filter(
    (addon) => addon.status === "Active",
  ).length;

  const inactiveAddons = addons.filter(
    (addon) => addon.status === "Inactive",
  ).length;

  const totalRevenue = addons.reduce((sum, addon) => sum + addon.revenue, 0);

  return (
    <div className="grid gap-6 md:grid-cols-2 xl:grid-cols-4">
      <StatCard title="Total Addons" value={totalAddons.toString()} />

      <StatCard title="Active Addons" value={activeAddons.toString()} />

      <StatCard title="Inactive Addons" value={inactiveAddons.toString()} />

      <StatCard
        title="Addon Revenue"
        value={`৳ ${totalRevenue.toLocaleString()}`}
      />
    </div>
  );
}

type StatCardProps = {
  title: string;
  value: string;
};

function StatCard({ title, value }: StatCardProps) {
  return (
    <div className="rounded-[28px] border border-border bg-card p-6 shadow-xl">
      <p className="text-sm text-muted-foreground">{title}</p>

      <h3 className="mt-3 text-3xl font-black">{value}</h3>
    </div>
  );
}

export default AddonsStats;
