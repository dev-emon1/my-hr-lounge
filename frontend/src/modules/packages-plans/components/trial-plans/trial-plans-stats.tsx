import { mockTrialPlans } from "../../constants/mock-trial-plans";

function TrialPlansStats() {
  const totalPlans = mockTrialPlans.length;

  const activePlans = mockTrialPlans.filter(
    (trial) => trial.status === "Active",
  ).length;

  const inactivePlans = mockTrialPlans.filter(
    (trial) => trial.status === "Inactive",
  ).length;

  const totalTrialUsers = mockTrialPlans.reduce(
    (sum, trial) => sum + trial.employeeLimit,
    0,
  );

  return (
    <div className="grid gap-6 md:grid-cols-2 xl:grid-cols-4">
      <StatsCard title="Total Trial Plans" value={totalPlans} />

      <StatsCard title="Active Plans" value={activePlans} />

      <StatsCard title="Inactive Plans" value={inactivePlans} />

      <StatsCard title="Employee Capacity" value={totalTrialUsers} />
    </div>
  );
}

type StatsCardProps = {
  title: string;

  value: string | number;
};

function StatsCard({ title, value }: StatsCardProps) {
  return (
    <div className="rounded-[32px] border border-border bg-card p-6">
      <p className="text-sm text-muted-foreground">{title}</p>

      <h3 className="mt-3 text-4xl font-black tracking-tight">{value}</h3>
    </div>
  );
}

export default TrialPlansStats;
