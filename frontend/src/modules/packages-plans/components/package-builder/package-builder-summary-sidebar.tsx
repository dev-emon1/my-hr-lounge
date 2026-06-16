import { useFormContext } from "react-hook-form";

import { Button } from "@/shared/ui/button";

import type { PackageBuilderFormValues } from "../../types/package-builder.types";

type Props = {
  mode: "create" | "edit";

  packageCode?: string;
};

function PackageBuilderSummarySidebar({ mode, packageCode }: Props) {
  const { watch } = useFormContext<PackageBuilderFormValues>();

  const modules = watch("modules") ?? [];

  const features = watch("features") ?? [];

  const enabledModules = modules.filter((module) => module.enabled).length;

  const enabledFeatures = features.filter((feature) => feature.enabled).length;

  const packageName = watch("packageName");

  const status = watch("status");

  return (
    <div className="space-y-6">
      {/* SUMMARY */}

      <div className="rounded-[32px] border border-border bg-card p-6">
        <h3 className="text-xl font-black">Package Summary</h3>

        <div className="mt-6 space-y-4">
          <SummaryRow label="Package" value={packageName || "Not Set"} />

          <SummaryRow label="Modules" value={String(enabledModules)} />

          <SummaryRow label="Features" value={String(enabledFeatures)} />

          <SummaryRow label="Status" value={status} />

          {mode === "edit" && packageCode && (
            <SummaryRow label="Code" value={packageCode} />
          )}
        </div>
      </div>

      {/* ACTIONS */}

      <div className="rounded-[32px] border border-border bg-card p-6">
        <h3 className="text-lg font-bold">Publishing</h3>

        <p className="mt-2 text-sm text-muted-foreground">
          Save package as draft or publish changes.
        </p>

        <div className="mt-6 space-y-3">
          <Button className="w-full">Save Draft</Button>

          <Button variant="outline" className="w-full">
            Publish Package
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
