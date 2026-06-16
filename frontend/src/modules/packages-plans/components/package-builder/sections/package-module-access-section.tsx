import { useFormContext } from "react-hook-form";

import { Checkbox } from "@/shared/ui/checkbox";

import { mockPackageModules } from "../../../constants/mock-package-builder";

import type { PackageBuilderFormValues } from "../../../types/package-builder.types";

function PackageModuleAccessSection() {
  const { watch, setValue } = useFormContext<PackageBuilderFormValues>();

  const modules = watch("modules");

  const handleToggle = (code: string) => {
    const updated = modules.map((module) =>
      module.code === code
        ? {
            ...module,
            enabled: !module.enabled,
          }
        : module,
    );

    setValue("modules", updated);
  };

  return (
    <div className="rounded-[32px] border border-border bg-card p-8">
      <div>
        <h2 className="text-2xl font-black">Module Access</h2>

        <p className="mt-2 text-muted-foreground">
          Select which modules will be available for this package.
        </p>
      </div>

      <div className="mt-8 grid gap-4 md:grid-cols-2">
        {mockPackageModules.map((module) => {
          const current = modules.find((item) => item.code === module.code);

          return (
            <div
              key={module.code}
              className="flex items-center justify-between rounded-2xl border border-border p-4"
            >
              <span className="font-medium">{module.name}</span>

              <Checkbox
                checked={current?.enabled ?? false}
                onCheckedChange={() => handleToggle(module.code)}
              />
            </div>
          );
        })}
      </div>
    </div>
  );
}

export default PackageModuleAccessSection;
