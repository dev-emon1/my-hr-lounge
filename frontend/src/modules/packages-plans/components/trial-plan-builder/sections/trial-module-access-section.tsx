import { useState } from "react";
import { useFormContext } from "react-hook-form";

import { ChevronDown } from "lucide-react";

import { Checkbox } from "@/shared/ui/checkbox";

import type { TrialPlanFormValues } from "../../../types/trial-plan-builder.types";
import type { TrialModuleAccess } from "../../../types/trial-plan.types";

export default function TrialModuleAccessSection() {
  const { watch, setValue } = useFormContext<TrialPlanFormValues>();

  const modules = watch("modules") ?? [];

  const [expanded, setExpanded] = useState<string[]>(["core-hr"]);

  const toggleExpand = (code: string) => {
    setExpanded((prev) =>
      prev.includes(code)
        ? prev.filter((item) => item !== code)
        : [...prev, code],
    );
  };

  const toggleModule = (moduleCode: string) => {
    const updated = modules.map((module) => {
      if (module.code !== moduleCode) {
        return module;
      }

      const nextEnabled = !module.enabled;

      return {
        ...module,

        enabled: nextEnabled,

        features: module.features.map((feature) => ({
          ...feature,
          enabled: nextEnabled,
        })),
      };
    });

    setValue("modules", updated);
  };

  const toggleFeature = (moduleCode: string, featureCode: string) => {
    const updated = modules.map((module) => {
      if (module.code !== moduleCode) {
        return module;
      }

      return {
        ...module,

        features: module.features.map((feature) =>
          feature.code === featureCode
            ? {
                ...feature,
                enabled: !feature.enabled,
              }
            : feature,
        ),
      };
    });

    setValue("modules", updated);
  };

  return (
    <div className="rounded-[32px] border border-border bg-card p-8">
      <div>
        <h2 className="text-2xl font-black">Module Access</h2>

        <p className="mt-2 text-muted-foreground">
          Configure modules available during trial.
        </p>
      </div>

      <div className="mt-8 space-y-4">
        {modules.map((module) => (
          <ModuleCard
            key={module.code}
            module={module}
            expanded={expanded.includes(module.code)}
            onExpand={() => toggleExpand(module.code)}
            onModuleToggle={() => toggleModule(module.code)}
            onFeatureToggle={(featureCode) =>
              toggleFeature(module.code, featureCode)
            }
          />
        ))}
      </div>
    </div>
  );
}

type ModuleCardProps = {
  module: TrialModuleAccess;

  expanded: boolean;

  onExpand: () => void;

  onModuleToggle: () => void;

  onFeatureToggle: (featureCode: string) => void;
};

function ModuleCard({
  module,
  expanded,
  onExpand,
  onModuleToggle,
  onFeatureToggle,
}: ModuleCardProps) {
  return (
    <div
      className={`
        overflow-hidden rounded-3xl border transition-all
        ${module.enabled ? "border-border" : "border-border/50 opacity-80"}
      `}
    >
      <div
        className="flex cursor-pointer items-center justify-between p-5"
        onClick={onExpand}
      >
        <div className="flex items-center gap-3">
          <ChevronDown
            size={18}
            className={`transition ${expanded ? "" : "-rotate-90"}`}
          />

          <div>
            <h4 className="font-bold">{module.name}</h4>

            <p className="text-xs text-muted-foreground">
              {module.features.length} Features •{" "}
              {module.features.filter((feature) => feature.enabled).length}{" "}
              Enabled
            </p>
          </div>
        </div>

        <div onClick={(e) => e.stopPropagation()}>
          <Checkbox checked={module.enabled} onCheckedChange={onModuleToggle} />
        </div>
      </div>

      {expanded && (
        <div className="border-t border-border bg-muted/20 p-5">
          <div className="space-y-3">
            {module.features.map((feature) => (
              <div
                key={feature.code}
                className="
                  flex items-center justify-between
                  rounded-2xl border border-border
                  bg-background p-4
                "
              >
                <div>
                  <p className="font-medium">{feature.name}</p>

                  <p className="text-xs text-muted-foreground">
                    Feature Access
                  </p>
                </div>

                <Checkbox
                  disabled={!module.enabled}
                  checked={feature.enabled}
                  onCheckedChange={() => onFeatureToggle(feature.code)}
                />
              </div>
            ))}
          </div>
        </div>
      )}
    </div>
  );
}
