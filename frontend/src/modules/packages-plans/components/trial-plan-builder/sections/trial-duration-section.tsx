import { useFormContext } from "react-hook-form";

import { Input } from "@/shared/ui/input";
import { Label } from "@/shared/ui/label";

import type { TrialPlanFormValues } from "../../../types/trial-plan-builder.types";

function TrialDurationSection() {
  const {
    register,
    formState: { errors },
  } = useFormContext<TrialPlanFormValues>();

  return (
    <div className="rounded-[32px] border border-border bg-card p-8">
      <div>
        <h2 className="text-2xl font-black">Trial Duration</h2>

        <p className="mt-2 text-muted-foreground">
          Configure how long the trial period will remain active.
        </p>
      </div>

      <div className="mt-8 max-w-md space-y-2">
        <Label>Duration (Days)</Label>

        <Input
          type="number"
          placeholder="14"
          {...register("durationDays", {
            valueAsNumber: true,
          })}
        />

        {errors.durationDays && (
          <p className="text-sm text-destructive">
            {errors.durationDays.message}
          </p>
        )}
      </div>

      <div className="mt-6 rounded-2xl border border-border bg-muted/40 p-5">
        <p className="text-sm text-muted-foreground">
          Trial duration determines how many days a customer can use the
          platform before subscription is required.
        </p>
      </div>
    </div>
  );
}

export default TrialDurationSection;
