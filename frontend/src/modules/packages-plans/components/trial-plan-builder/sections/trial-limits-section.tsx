import { useFormContext } from "react-hook-form";

import { Checkbox } from "@/shared/ui/checkbox";
import { Input } from "@/shared/ui/input";
import { Label } from "@/shared/ui/label";

import type { TrialPlanFormValues } from "../../../types/trial-plan-builder.types";

function TrialLimitsSection() {
  const {
    watch,
    setValue,
    register,
    formState: { errors },
  } = useFormContext<TrialPlanFormValues>();

  const employeeLimit = watch("employeeLimit");

  const unlimitedEmployees = employeeLimit === null;

  return (
    <div className="rounded-[32px] border border-border bg-card p-8">
      <div>
        <h2 className="text-2xl font-black">Trial Capacity</h2>

        <p className="mt-2 text-muted-foreground">
          Configure employee capacity for this trial plan.
        </p>
      </div>

      <div className="mt-8 max-w-md space-y-4">
        <div className="space-y-2">
          <Label>Employee Limit</Label>

          <Input
            type="number"
            disabled={unlimitedEmployees}
            {...register("employeeLimit", {
              valueAsNumber: true,
            })}
            placeholder="50"
          />

          {errors.employeeLimit && (
            <p className="text-sm text-destructive">
              {errors.employeeLimit.message}
            </p>
          )}
        </div>

        <div className="flex items-center gap-3">
          <Checkbox
            checked={unlimitedEmployees}
            onCheckedChange={(checked) =>
              setValue("employeeLimit", checked ? null : 50)
            }
          />

          <span className="text-sm">Unlimited Employees</span>
        </div>
      </div>

      <div className="mt-6 rounded-2xl border border-border bg-muted/40 p-5">
        <p className="text-sm text-muted-foreground">
          Employee limit controls how many employees can be added during the
          trial period.
        </p>
      </div>
    </div>
  );
}

export default TrialLimitsSection;
