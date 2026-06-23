import type { TrialPlan } from "../../types/trial-plan.types";

type Props = {
  trial: TrialPlan;
};

function TrialPlanModulesCard({ trial }: Props) {
  return (
    <div className="rounded-[32px] border border-border bg-card p-8">
      <h2 className="text-2xl font-black">Module Access</h2>

      <p className="mt-2 text-muted-foreground">
        Available modules for this trial plan.
      </p>

      <div className="mt-8 grid gap-4 md:grid-cols-2">
        {trial.modules.map((module) => (
          <div
            key={module.code}
            className="rounded-2xl border border-border p-4"
          >
            <p className="font-semibold">{module.name}</p>
          </div>
        ))}
      </div>
    </div>
  );
}

export default TrialPlanModulesCard;
