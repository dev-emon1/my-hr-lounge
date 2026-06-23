import { useFormContext } from "react-hook-form";

import { Button } from "@/shared/ui/button";

import type { TrialPlanFormValues } from "../../types/trial-plan-builder.types";

type Props = {
  mode: "create" | "edit";

  onSaveDraft: () => void;

  onPublish: () => void;
};

function TrialPlanSummarySidebar({ mode, onSaveDraft, onPublish }: Props) {
  const { watch } = useFormContext<TrialPlanFormValues>();

  const trialName = watch("trialName");

  const trialCode = watch("trialCode");

  const durationDays = watch("durationDays");

  const employeeLimit = watch("employeeLimit");

  const modules = watch("modules") ?? [];

  const enabledModules = modules.filter((module) => module.enabled).length;

  const enabledFeatures = modules.reduce(
    (total, module) =>
      total + module.features.filter((feature) => feature.enabled).length,
    0,
  );

  const status = watch("status");

  return (
    <div className="space-y-6">
      {/* SUMMARY */}

      <div className="rounded-[32px] border border-border bg-card p-6">
        <h3 className="text-xl font-black">Trial Summary</h3>

        <div className="mt-6 space-y-4">
          <SummaryRow label="Trial" value={trialName || "Not Set"} />

          <SummaryRow label="Code" value={trialCode || "Not Set"} />

          <SummaryRow label="Duration" value={`${durationDays || 0} Days`} />

          <SummaryRow
            label="Employees"
            value={employeeLimit === null ? "Unlimited" : String(employeeLimit)}
          />

          <SummaryRow label="Modules" value={String(enabledModules)} />

          <SummaryRow label="Features" value={String(enabledFeatures)} />

          <SummaryRow label="Status" value={status} />
        </div>
      </div>

      {/* ACTIONS */}

      <div className="rounded-[32px] border border-border bg-card p-6">
        <h3 className="text-lg font-bold">Trial Actions</h3>

        <p className="mt-2 text-sm text-muted-foreground">
          Save draft or publish the trial plan.
        </p>

        <div className="mt-6 space-y-3">
          <Button variant="outline" className="w-full" onClick={onSaveDraft}>
            Save Draft
          </Button>

          <Button className="w-full" onClick={onPublish}>
            {mode === "create" ? "Create Trial Plan" : "Update Trial Plan"}
          </Button>
        </div>
      </div>
    </div>
  );
}

type SummaryRowProps = {
  label: string;

  value: string;
};

function SummaryRow({ label, value }: SummaryRowProps) {
  return (
    <div className="flex items-center justify-between">
      <span className="text-sm text-muted-foreground">{label}</span>

      <span className="font-semibold">{value}</span>
    </div>
  );
}

export default TrialPlanSummarySidebar;
