import { useFormContext } from "react-hook-form";

import { Input } from "@/shared/ui/input";
import { Label } from "@/shared/ui/label";

import type { PackageBuilderFormValues } from "../../../types/package-builder.types";

function PackagePricingSection() {
  const {
    register,
    formState: { errors },
  } = useFormContext<PackageBuilderFormValues>();

  return (
    <div className="rounded-[32px] border border-border bg-card p-8">
      <div>
        <h2 className="text-2xl font-black">Pricing Configuration</h2>

        <p className="mt-2 text-muted-foreground">
          Configure monthly and yearly pricing.
        </p>
      </div>

      <div className="mt-8 grid gap-6 md:grid-cols-2">
        <div className="space-y-2">
          <Label>Monthly Price</Label>

          <Input
            type="number"
            {...register("monthlyPrice", {
              valueAsNumber: true,
            })}
            placeholder="15000"
          />

          {errors.monthlyPrice && (
            <p className="text-sm text-destructive">
              {errors.monthlyPrice.message}
            </p>
          )}
        </div>

        <div className="space-y-2">
          <Label>Yearly Price</Label>

          <Input
            type="number"
            {...register("yearlyPrice", {
              valueAsNumber: true,
            })}
            placeholder="150000"
          />

          {errors.yearlyPrice && (
            <p className="text-sm text-destructive">
              {errors.yearlyPrice.message}
            </p>
          )}
        </div>
      </div>

      <div className="mt-6 rounded-2xl border border-border bg-muted/40 p-5">
        <p className="text-sm text-muted-foreground">
          Annual pricing can be discounted compared to monthly pricing × 12.
        </p>
      </div>
    </div>
  );
}

export default PackagePricingSection;
