import type { TrialPlan } from "../../types/trial-plan.types";

type Props = {
  trial: TrialPlan;
};

function TrialPlanInformationCard({ trial }: Props) {
  return (
    <div className="rounded-[32px] border border-border bg-card p-8">
      <h2 className="text-2xl font-black">Trial Information</h2>

      <div className="mt-8 grid gap-6 md:grid-cols-2">
        <InfoRow label="Trial Name" value={trial.trialName} />

        <InfoRow label="Trial Code" value={trial.trialCode} />

        <InfoRow label="Duration" value={`${trial.durationDays} Days`} />

        <InfoRow label="Employee Limit" value={String(trial.employeeLimit)} />
      </div>
    </div>
  );
}

function InfoRow({ label, value }: { label: string; value: string }) {
  return (
    <div>
      <p className="text-sm text-muted-foreground">{label}</p>

      <p className="mt-2 font-semibold">{value}</p>
    </div>
  );
}

export default TrialPlanInformationCard;
