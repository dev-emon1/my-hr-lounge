import { Badge } from "@/shared/ui/badge";

import type { TrialPlan } from "../../types/trial-plan.types";

type Props = {
  trial: TrialPlan;
};

function TrialPlanHealthCard({ trial }: Props) {
  return (
    <div className="rounded-[32px] border border-border bg-card p-6">
      <h3 className="text-xl font-black">Trial Health</h3>

      <div className="mt-6 space-y-4">
        <HealthRow
          label="Status"
          value={
            <Badge
              className={
                trial.status === "Active"
                  ? "bg-emerald-500/10 text-emerald-600"
                  : "bg-slate-500/10 text-slate-600"
              }
            >
              {trial.status}
            </Badge>
          }
        />

        <HealthRow label="Duration" value={`${trial.durationDays} Days`} />

        <HealthRow label="Modules" value={String(trial.modules.length)} />

        <HealthRow label="Employees" value={String(trial.employeeLimit)} />
      </div>
    </div>
  );
}

function HealthRow({
  label,
  value,
}: {
  label: string;
  value: React.ReactNode;
}) {
  return (
    <div className="flex items-center justify-between">
      <span className="text-muted-foreground">{label}</span>

      <span>{value}</span>
    </div>
  );
}

export default TrialPlanHealthCard;
