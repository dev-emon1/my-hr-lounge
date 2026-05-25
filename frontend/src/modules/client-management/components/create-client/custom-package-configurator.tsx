import { SlidersHorizontal } from "lucide-react";

import { Card } from "@/shared/ui/card";

import { Input } from "@/shared/ui/input";

import { Label } from "@/shared/ui/label";

type Props = {
  config: {
    employees: number;

    admins: number;

    storage: number;

    monthlyPrice: number;

    yearlyPrice: number;

    discount: number;

    setupFee: number;

    modules: string[];
  };

  onChange: React.Dispatch<
    React.SetStateAction<{
      employees: number;

      admins: number;

      storage: number;

      monthlyPrice: number;

      yearlyPrice: number;

      discount: number;

      setupFee: number;

      modules: string[];
    }>
  >;
};

const availableModules = [
  "Employee",
  "Attendance",
  "Leave",
  "Payroll",
  "Recruitment",
  "Performance",
  "Training",
  "Asset",
  "Expense",
  "Loan",
  "Document",
  "Workflow",
  "Audit",
  "Integration",
  "Role",
  "Company",
];

function CustomPackageConfigurator({ config, onChange }: Props) {
  return (
    <Card className="rounded-[32px] border-border bg-card/60 p-8 shadow-2xl backdrop-blur-xl">
      <div className="mb-8 flex items-start gap-4">
        <div className="flex h-14 w-14 items-center justify-center rounded-3xl bg-primary/10 text-primary">
          <SlidersHorizontal size={26} />
        </div>

        <div>
          <h2 className="text-2xl font-black tracking-tight">
            Custom Package Configuration
          </h2>

          <p className="mt-2 text-muted-foreground">
            Configure modules, limits, and infrastructure manually.
          </p>
        </div>
      </div>

      {/* LIMITS */}
      <div className="grid gap-6 md:grid-cols-3">
        <div className="space-y-3">
          <Label>Employee Limit</Label>

          <Input
            type="number"
            value={config.employees}
            onChange={(e) =>
              onChange((prev) => ({
                ...prev,

                employees: Number(e.target.value),
              }))
            }
            className="h-12 rounded-2xl"
          />
        </div>

        <div className="space-y-3">
          <Label>Admin Limit</Label>

          <Input
            type="number"
            value={config.admins}
            onChange={(e) =>
              onChange((prev) => ({
                ...prev,

                admins: Number(e.target.value),
              }))
            }
            className="h-12 rounded-2xl"
          />
        </div>

        <div className="space-y-3">
          <Label>Storage (GB)</Label>

          <Input
            type="number"
            value={config.storage}
            onChange={(e) =>
              onChange((prev) => ({
                ...prev,

                storage: Number(e.target.value),
              }))
            }
            className="h-12 rounded-2xl"
          />
        </div>
      </div>

      {/* MODULES */}
      <div className="mt-10">
        <h3 className="mb-5 text-lg font-black">Select Modules</h3>

        <div className="grid gap-4 md:grid-cols-2 xl:grid-cols-3">
          {availableModules.map((module) => (
            <label
              key={module}
              className="flex cursor-pointer items-center gap-3 rounded-2xl border border-border bg-background/40 p-4 transition-all duration-300 hover:border-primary hover:bg-primary/[0.03]"
            >
              <input
                type="checkbox"
                checked={config.modules.includes(module)}
                onChange={() => {
                  const exists = config.modules.includes(module);

                  if (exists) {
                    onChange((prev) => ({
                      ...prev,

                      modules: prev.modules.filter((m) => m !== module),
                    }));
                  } else {
                    onChange((prev) => ({
                      ...prev,

                      modules: [...prev.modules, module],
                    }));
                  }
                }}
                className="h-5 w-5 rounded border-border"
              />

              <span className="font-medium">{module}</span>
            </label>
          ))}
        </div>
      </div>
    </Card>
  );
}

export default CustomPackageConfigurator;
