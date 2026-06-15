import type { SubscriptionChange } from "../../types/subscription-change.types";

type Props = {
  changes: SubscriptionChange[];
};

function SubscriptionChangesStats({ changes }: Props) {
  const totalChanges = changes.length;

  const pendingChanges = changes.filter(
    (item) => item.status === "Pending",
  ).length;

  const approvedChanges = changes.filter(
    (item) => item.status === "Approved",
  ).length;

  const completedChanges = changes.filter(
    (item) => item.status === "Completed",
  ).length;

  return (
    <div className="grid gap-6 md:grid-cols-2 xl:grid-cols-4">
      <StatCard title="Total Requests" value={totalChanges.toString()} />

      <StatCard title="Pending Requests" value={pendingChanges.toString()} />

      <StatCard title="Approved Requests" value={approvedChanges.toString()} />

      <StatCard
        title="Completed Requests"
        value={completedChanges.toString()}
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

export default SubscriptionChangesStats;
