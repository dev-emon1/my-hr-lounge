import { useFormContext } from "react-hook-form";

import { Input } from "@/shared/ui/input";
import { Label } from "@/shared/ui/label";
import { Textarea } from "@/shared/ui/textarea";

import type { PackageBuilderFormValues } from "../../../types/package-builder.types";

function PackageBasicInformationSection() {
  const {
    register,
    formState: { errors },
  } = useFormContext<PackageBuilderFormValues>();

  return (
    <div className="rounded-[32px] border border-border bg-card p-8">
      <div>
        <h2 className="text-2xl font-black">Basic Information</h2>

        <p className="mt-2 text-muted-foreground">
          Configure package identity and description.
        </p>
      </div>

      <div className="mt-8 grid gap-6 md:grid-cols-2">
        <div className="space-y-2">
          <Label>Package Name</Label>

          <Input {...register("packageName")} placeholder="Growth Package" />

          {errors.packageName && (
            <p className="text-sm text-destructive">
              {errors.packageName.message}
            </p>
          )}
        </div>

        <div className="space-y-2">
          <Label>Package Code</Label>

          <Input {...register("packageCode")} placeholder="PKG-GROWTH" />

          {errors.packageCode && (
            <p className="text-sm text-destructive">
              {errors.packageCode.message}
            </p>
          )}
        </div>
      </div>

      <div className="mt-6 space-y-2">
        <Label>Description</Label>

        <Textarea
          rows={5}
          {...register("description")}
          placeholder="Package description..."
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

export default PackageBasicInformationSection;
