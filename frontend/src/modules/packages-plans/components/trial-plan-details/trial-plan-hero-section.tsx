import type { TrialPlan } from "../../types/trial-plan.types";

type Props = {
  trial: TrialPlan;
};

function TrialPlanHeroSection({ trial }: Props) {
  return (
    <div className="rounded-[32px] border border-border bg-card p-8">
      <div className="flex flex-col gap-6 lg:flex-row lg:items-center lg:justify-between">
        <div>
          <p className="text-sm text-muted-foreground">{trial.trialCode}</p>

          <h1 className="mt-2 text-4xl font-black tracking-tight">
            {trial.trialName}
          </h1>

          <p className="mt-4 max-w-3xl text-muted-foreground">
            {trial.description}
          </p>
        </div>
      </div>
    </div>
  );
}

export default TrialPlanHeroSection;
