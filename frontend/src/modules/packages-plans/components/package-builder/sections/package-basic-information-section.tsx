import { useEffect, useState } from "react";

import { useFormContext } from "react-hook-form";

import { Input } from "@/shared/ui/input";
import { Label } from "@/shared/ui/label";
import { Textarea } from "@/shared/ui/textarea";
import {
  Select,
  SelectContent,
  SelectItem,
  SelectTrigger,
  SelectValue,
} from "@/shared/ui/select";

import type { PackageBuilderFormValues } from "../../../types/package-builder.types";

function PackageBasicInformationSection() {
  const {
    register,
    watch,
    setValue,
    formState: { errors },
  } = useFormContext<PackageBuilderFormValues>();

  const status = watch("status");

  const packageName = watch("packageName");

  const packageCode = watch("packageCode");

  const [isCodeManuallyEdited, setIsCodeManuallyEdited] = useState(false);

  useEffect(() => {
    if (isCodeManuallyEdited) return;

    if (!packageName) {
      setValue("packageCode", "");

      return;
    }

    const generatedCode = `PKG-${packageName}`
      .toUpperCase()
      .replace(/[^A-Z0-9]+/g, "-")
      .replace(/^-|-$/g, "");

    setValue("packageCode", generatedCode);
  }, [packageName, isCodeManuallyEdited, setValue]);
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

          <Input
            {...register("packageCode")}
            placeholder="PKG-GROWTH"
            onChange={(e) => {
              setIsCodeManuallyEdited(true);

              setValue("packageCode", e.target.value);
            }}
          />

          {errors.packageCode && (
            <p className="text-sm text-destructive">
              {errors.packageCode.message}
            </p>
          )}
        </div>
      </div>

      <div className="mt-6 space-y-2">
        <Label>Status</Label>

        <Select
          value={status}
          onValueChange={(value) =>
            setValue("status", value as "Draft" | "Published")
          }
        >
          <SelectTrigger>
            <SelectValue />
          </SelectTrigger>

          <SelectContent>
            <SelectItem value="Draft">Draft</SelectItem>

            <SelectItem value="Published">Published</SelectItem>
          </SelectContent>
        </Select>
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
