import { useFormContext } from "react-hook-form";

import { Input } from "@/shared/ui/input";

import { Label } from "@/shared/ui/label";

import { Checkbox } from "@/shared/ui/checkbox";

import type { PackageBuilderFormValues } from "../../../types/package-builder.types";

function PackageLimitsSection() {
  const {
    watch,
    setValue,
    register,
    formState: { errors },
  } = useFormContext<PackageBuilderFormValues>();

  const employeeLimit = watch("employeeLimit");

  const branchLimit = watch("branchLimit");

  const unlimitedEmployees = employeeLimit === null;

  const unlimitedBranches = branchLimit === null;

  return (
    <div className="rounded-[32px] border border-border bg-card p-8">
      <div>
        <h2 className="text-2xl font-black">Limits & Capacity</h2>

        <p className="mt-2 text-muted-foreground">
          Configure package usage limits.
        </p>
      </div>

      <div className="mt-8 grid gap-8 md:grid-cols-2">
        <div className="space-y-4">
          <Label>Employee Limit</Label>

          <Input
            type="number"
            disabled={unlimitedEmployees}
            {...register("employeeLimit", {
              valueAsNumber: true,
            })}
          />

          <div className="flex items-center gap-3">
            <Checkbox
              checked={unlimitedEmployees}
              onCheckedChange={(checked) => {
                setValue("employeeLimit", checked ? null : 100);
              }}
            />

            <span className="text-sm">Unlimited Employees</span>
          </div>
        </div>

        <div className="space-y-4">
          <Label>Branch Limit</Label>

          <Input
            type="number"
            disabled={unlimitedBranches}
            {...register("branchLimit", {
              valueAsNumber: true,
            })}
          />

          <div className="flex items-center gap-3">
            <Checkbox
              checked={unlimitedBranches}
              onCheckedChange={(checked) => {
                setValue("branchLimit", checked ? null : 5);
              }}
            />

            <span className="text-sm">Unlimited Branches</span>
          </div>
        </div>
      </div>

      <div className="mt-8 space-y-2">
        <Label>Storage Limit</Label>

        <Input placeholder="100 GB" {...register("storageLimit")} />
        {errors.storageLimit && (
          <p className="text-sm text-destructive">
            {errors.storageLimit.message}
          </p>
        )}
      </div>
    </div>
  );
}

export default PackageLimitsSection;
