import { useFormContext } from "react-hook-form";

import { Checkbox } from "@/shared/ui/checkbox";
import { Input } from "@/shared/ui/input";
import { Label } from "@/shared/ui/label";

import type { PackageBuilderFormValues } from "../../../types/package-builder.types";

function PackageLimitsSection() {
  const {
    watch,
    setValue,
    register,
    formState: { errors },
  } = useFormContext<PackageBuilderFormValues>();

  const limits = watch("limits");

  const unlimitedEmployees = limits.employees === null;

  const unlimitedBranches = limits.branches === null;

  return (
    <div className="rounded-[32px] border border-border bg-card p-8">
      <div>
        <h2 className="text-2xl font-black">Limits & Capacity</h2>

        <p className="mt-2 text-muted-foreground">
          Configure package usage limits.
        </p>
      </div>

      <div className="mt-8 grid gap-8 md:grid-cols-2">
        {/* Employees */}

        <div className="space-y-4">
          <Label>Employee Limit</Label>

          <Input
            type="number"
            disabled={unlimitedEmployees}
            {...register("limits.employees", {
              valueAsNumber: true,
            })}
          />

          <div className="flex items-center gap-3">
            <Checkbox
              checked={unlimitedEmployees}
              onCheckedChange={(checked) => {
                setValue("limits.employees", checked ? null : 100);
              }}
            />

            <span className="text-sm">Unlimited Employees</span>
          </div>
        </div>

        {/* Branches */}

        <div className="space-y-4">
          <Label>Branch Limit</Label>

          <Input
            type="number"
            disabled={unlimitedBranches}
            {...register("limits.branches", {
              valueAsNumber: true,
            })}
          />

          <div className="flex items-center gap-3">
            <Checkbox
              checked={unlimitedBranches}
              onCheckedChange={(checked) => {
                setValue("limits.branches", checked ? null : 5);
              }}
            />

            <span className="text-sm">Unlimited Branches</span>
          </div>
        </div>
      </div>

      {/* Additional Limits */}

      <div className="mt-8 grid gap-8 md:grid-cols-2">
        <div className="space-y-2">
          <Label>Admin Limit</Label>

          <Input
            type="number"
            {...register("limits.admins", {
              valueAsNumber: true,
            })}
          />
        </div>

        <div className="space-y-2">
          <Label>Department Limit</Label>

          <Input
            type="number"
            {...register("limits.departmentLimit", {
              valueAsNumber: true,
            })}
          />
        </div>

        <div className="space-y-2">
          <Label>Storage (GB)</Label>

          <Input
            type="number"
            {...register("limits.storageGb", {
              valueAsNumber: true,
            })}
          />

          {errors.limits?.storageGb && (
            <p className="text-sm text-destructive">
              {errors.limits.storageGb.message}
            </p>
          )}
        </div>

        <div className="space-y-2">
          <Label>Device Limit</Label>

          <Input
            type="number"
            {...register("limits.deviceLimit", {
              valueAsNumber: true,
            })}
          />
        </div>
      </div>
    </div>
  );
}

export default PackageLimitsSection;
