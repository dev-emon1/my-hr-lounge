import { Crown } from "lucide-react";

import { PackageType } from "@/modules/client-management/constants/package-data";

type Props = {
  pkg: PackageType;

  billingCycle: "monthly" | "yearly";

  selected: boolean;

  onSelect: (id: string) => void;
};

function PackageSelectionCard({
  pkg,
  billingCycle,
  selected,
  onSelect,
}: Props) {
  const price = billingCycle === "monthly" ? pkg.monthlyPrice : pkg.yearlyPrice;

  return (
    <button
      type="button"
      onClick={() => onSelect(pkg.id)}
      className={`group relative overflow-hidden rounded-[28px] border p-6 text-left transition-all duration-300 ${
        selected
          ? "border-primary shadow-xl"
          : "border-border hover:border-primary/40"
      }`}
    >
      {selected && <div className="absolute inset-x-0 top-0 h-1 bg-primary" />}

      <div className="flex items-start justify-between">
        <div>
          <h3 className="text-2xl font-black">{pkg.name}</h3>

          <p className="mt-2 text-sm text-muted-foreground">
            {pkg.description}
          </p>
        </div>

        {pkg.id === "enterprise" && <Crown className="text-yellow-500" />}
      </div>

      <div className="mt-6">
        {pkg.id === "custom" ? (
          <h4 className="text-4xl font-black">Custom</h4>
        ) : (
          <>
            <span className="text-4xl font-black">${price}</span>

            <span className="text-muted-foreground">/{billingCycle}</span>
          </>
        )}
      </div>

      <div className="mt-6 grid gap-3">
        <div className="rounded-2xl bg-muted/50 p-3">
          Employees: <strong>{pkg.employees}</strong>
        </div>

        <div className="rounded-2xl bg-muted/50 p-3">
          Admins: <strong>{pkg.admins}</strong>
        </div>

        <div className="rounded-2xl bg-muted/50 p-3">
          Storage: <strong>{pkg.storage}</strong>
        </div>
      </div>
    </button>
  );
}

export default PackageSelectionCard;
