import { useFormContext } from "react-hook-form";

import { Input } from "@/shared/ui/input";
import { Label } from "@/shared/ui/label";
import { Textarea } from "@/shared/ui/textarea";

import type { TrialPlanFormValues } from "../../../types/trial-plan-builder.types";

function TrialBasicInformationSection() {
  const {
    register,
    formState: { errors },
  } = useFormContext<TrialPlanFormValues>();

  return (
    <div className="rounded-[32px] border border-border bg-card p-8">
      <div>
        <h2 className="text-2xl font-black">Basic Information</h2>

        <p className="mt-2 text-muted-foreground">
          Configure trial plan identity and description.
        </p>
      </div>

      <div className="mt-8 grid gap-6 md:grid-cols-2">
        <div className="space-y-2">
          <Label>Trial Name</Label>

          <Input {...register("trialName")} placeholder="Starter Trial" />

          {errors.trialName && (
            <p className="text-sm text-destructive">
              {errors.trialName.message}
            </p>
          )}
        </div>

        <div className="space-y-2">
          <Label>Trial Code</Label>

          <Input {...register("trialCode")} placeholder="TRIAL-STARTER" />

          {errors.trialCode && (
            <p className="text-sm text-destructive">
              {errors.trialCode.message}
            </p>
          )}
        </div>
      </div>

      <div className="mt-6 space-y-2">
        <Label>Description</Label>

        <Textarea
          rows={5}
          {...register("description")}
          placeholder="Trial plan description..."
        />

        {errors.description && (
          <p className="text-sm text-destructive">
            {errors.description.message}
          </p>
        )}
      </div>
    </div>
  );
}

export default TrialBasicInformationSection;
