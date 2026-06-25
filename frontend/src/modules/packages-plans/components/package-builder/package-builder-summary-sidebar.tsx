import { useFormContext } from "react-hook-form";

import { Button } from "@/shared/ui/button";

import type { PackageBuilderFormValues } from "../../types/package-builder.types";

type Props = {
  mode: "create" | "edit";
  isLoading?: boolean;
  onSaveDraft: () => void;
  onPublish: () => void;
};

function PackageBuilderSummarySidebar({
  mode,
  onPublish,
  onSaveDraft,
  isLoading,
}: Props) {
  const { watch } = useFormContext<PackageBuilderFormValues>();

  const modules = watch("modules") ?? [];

  const limits = watch("limits");

  const packageName = watch("packageName");
  const packageCode = watch("packageCode");

  const monthlyPrice = watch("monthlyPrice");
  const yearlyPrice = watch("yearlyPrice");

  const status = watch("status");

  const trialEnabled = watch("trialEnabled");
  const trialDays = watch("trialDays");

  const enabledModules = modules.filter((module) => module.enabled).length;

  const enabledFeatures = modules.reduce(
    (count, module) =>
      count + module.features.filter((feature) => feature.enabled).length,
    0,
  );

  return (
    <div className="space-y-6">
      {/* SUMMARY */}

      <div className="rounded-[32px] border border-border bg-card p-6">
        <h3 className="text-xl font-black">Package Summary</h3>

        <div className="mt-6 space-y-4">
          <SummaryRow label="Package" value={packageName || "Not Set"} />

          <SummaryRow label="Code" value={packageCode || "Not Set"} />

          <SummaryRow label="Monthly" value={`৳ ${monthlyPrice || 0}`} />

          <SummaryRow label="Yearly" value={`৳ ${yearlyPrice || 0}`} />

          <SummaryRow
            label="Employees"
            value={
              limits?.employees === null
                ? "Unlimited"
                : String(limits?.employees ?? "-")
            }
          />

          <SummaryRow
            label="Admins"
            value={
              limits?.admins === null ? "-" : String(limits?.admins ?? "-")
            }
          />

          <SummaryRow
            label="Departments"
            value={
              limits?.departmentLimit === null
                ? "-"
                : String(limits?.departmentLimit ?? "-")
            }
          />

          <SummaryRow
            label="Branches"
            value={
              limits?.branches === null
                ? "Unlimited"
                : String(limits?.branches ?? "-")
            }
          />

          <SummaryRow
            label="Storage"
            value={limits?.storageGb ? `${limits.storageGb} GB` : "-"}
          />

          <SummaryRow
            label="Devices"
            value={
              limits?.deviceLimit === null
                ? "-"
                : String(limits?.deviceLimit ?? "-")
            }
          />

          <SummaryRow label="Modules" value={String(enabledModules)} />

          <SummaryRow label="Features" value={String(enabledFeatures)} />

          <SummaryRow
            label="Trial"
            value={trialEnabled ? `${trialDays} Days` : "Disabled"}
          />

          <SummaryRow label="Status" value={status} />
        </div>
      </div>

      {/* ACTIONS */}

      <div className="rounded-[32px] border border-border bg-card p-6">
        <h3 className="text-lg font-bold">Package Actions</h3>

        <p className="mt-2 text-sm text-muted-foreground">
          Save package configuration or publish it for client assignment.
        </p>

        <div className="mt-6 space-y-3">
          <Button
            type="button"
            disabled={isLoading}
            onClick={onSaveDraft}
            variant="outline"
            className="w-full"
          >
            Save Draft
          </Button>

          <Button
            type="button"
            disabled={isLoading}
            onClick={onPublish}
            className="w-full"
          >
            {isLoading
              ? "Processing..."
              : mode === "create"
                ? "Create Package"
                : "Update Package"}
          </Button>
        </div>
      </div>
    </div>
  );
}

function SummaryRow({ label, value }: { label: string; value: string }) {
  return (
    <div className="flex items-center justify-between">
      <span className="text-sm text-muted-foreground">{label}</span>

      <span className="font-semibold">{value}</span>
    </div>
  );
}

export default PackageBuilderSummarySidebar;
