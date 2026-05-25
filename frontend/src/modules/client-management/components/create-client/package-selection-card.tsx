import { Check, Crown, ShieldCheck } from "lucide-react";

import { Card } from "@/shared/ui/card";

import { cn } from "@/shared/lib/utils";

import type { Package } from "../../types/package.types";

type Props = {
  packages: Package[];

  selectedPackageId: string;

  onSelectPackage: (id: string) => void;
};

function PackageSelectionCard({
  packages,

  selectedPackageId,

  onSelectPackage,
}: Props) {
  return (
    <Card className="rounded-[32px] border-border bg-card/60 p-8 shadow-2xl backdrop-blur-xl">
      <div className="mb-8 flex items-start gap-4">
        <div className="flex h-14 w-14 items-center justify-center rounded-3xl bg-primary/10 text-primary">
          <Crown size={26} />
        </div>

        <div>
          <h2 className="text-2xl font-black tracking-tight">
            Package Selection
          </h2>

          <p className="mt-2 text-muted-foreground">
            Choose subscription package and enabled capabilities.
          </p>
        </div>
      </div>

      <div className="grid gap-6 lg:grid-cols-3">
        {packages.map((pkg) => {
          const isSelected = selectedPackageId === pkg.id;

          return (
            <button
              key={pkg.id}
              type="button"
              onClick={() => onSelectPackage(pkg.id)}
              className={cn(
                "group relative overflow-hidden rounded-[28px] border p-6 text-left transition-all duration-300",
                isSelected
                  ? "border-primary bg-primary/5 shadow-[0_0_0_1px_hsl(var(--primary))]"
                  : "border-border bg-background/40 hover:border-primary/40 hover:bg-primary/[0.03]",
              )}
            >
              {/* ACTIVE INDICATOR */}
              {isSelected && (
                <div className="absolute right-4 top-4 flex h-8 w-8 items-center justify-center rounded-full bg-primary text-primary-foreground shadow-lg">
                  <Check size={16} />
                </div>
              )}

              {/* HEADER */}
              <div className="mb-6">
                <div className="mb-4 flex h-12 w-12 items-center justify-center rounded-2xl bg-primary/10 text-primary">
                  <ShieldCheck size={22} />
                </div>

                <h3 className="text-xl font-black">{pkg.name}</h3>

                <p className="mt-2 line-clamp-2 text-sm leading-6 text-muted-foreground">
                  {pkg.description}
                </p>
              </div>

              {/* PRICE */}
              <div className="mb-6">
                <div className="flex items-end gap-1">
                  <span className="text-4xl font-black tracking-tight">
                    ৳{pkg.monthlyPrice}
                  </span>

                  <span className="pb-1 text-sm text-muted-foreground">
                    /month
                  </span>
                </div>
              </div>

              {/* LIMITS */}
              <div className="space-y-3">
                <div className="flex items-center justify-between text-sm">
                  <span className="text-muted-foreground">Employees</span>

                  <span className="font-bold">{pkg.employees}</span>
                </div>

                <div className="flex items-center justify-between text-sm">
                  <span className="text-muted-foreground">Admins</span>

                  <span className="font-bold">{pkg.admins}</span>
                </div>

                <div className="flex items-center justify-between text-sm">
                  <span className="text-muted-foreground">Storage</span>

                  <span className="font-bold">{pkg.storage}</span>
                </div>
              </div>
            </button>
          );
        })}
      </div>
    </Card>
  );
}

export default PackageSelectionCard;
