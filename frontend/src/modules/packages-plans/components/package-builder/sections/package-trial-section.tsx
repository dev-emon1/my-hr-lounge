import { useFormContext } from "react-hook-form";

import { Checkbox } from "@/shared/ui/checkbox";

import { Input } from "@/shared/ui/input";

import { Label } from "@/shared/ui/label";

import type { PackageBuilderFormValues } from "../../../types/package-builder.types";

function PackageTrialSection() {
  const {
    watch,
    setValue,
    register,
    formState: { errors },
  } = useFormContext<PackageBuilderFormValues>();

  const trialEnabled = watch("trialEnabled");

  return (
    <div className="rounded-[32px] border border-border bg-card p-8">
      <div>
        <h2 className="text-2xl font-black">Trial Configuration</h2>

        <p className="mt-2 text-muted-foreground">
          Configure free trial settings.
        </p>
      </div>

      <div className="mt-8 flex items-center gap-3">
        <Checkbox
          checked={trialEnabled}
          onCheckedChange={(checked) => setValue("trialEnabled", !!checked)}
        />

        <span className="font-medium">Enable Trial</span>
      </div>

      <div className="mt-6 space-y-2">
        <Label>Trial Days</Label>

        <Input
          type="number"
          disabled={!trialEnabled}
          {...register("trialDays", {
            valueAsNumber: true,
          })}
        />

        {errors.trialDays && (
          <p className="text-sm text-destructive">{errors.trialDays.message}</p>
        )}
      </div>
    </div>
  );
}

export default PackageTrialSection;
