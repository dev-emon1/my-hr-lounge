import { Badge } from "@/shared/ui/badge";
import type { PackageDetails } from "../../types/package-details.types";

type Props = {
  pkg: PackageDetails;
};

function PackageHeroSection({ pkg }: Props) {
  return (
    <div className="rounded-[32px] border border-border bg-card/60 p-8">
      <div className="flex flex-col gap-6 lg:flex-row lg:items-center lg:justify-between">
        <div>
          <h1 className="text-4xl font-black">{pkg.name}</h1>

          <p className="mt-3 text-muted-foreground">{pkg.slug}</p>

          <p className="mt-3 max-w-2xl text-sm text-muted-foreground">
            {pkg.description}
          </p>
        </div>

        <div className="flex flex-wrap gap-3">
          <Badge
            className={
              pkg.status.value === "active"
                ? "bg-emerald-500/10 text-emerald-600"
                : "bg-amber-500/10 text-amber-600"
            }
          >
            {pkg.status.label}
          </Badge>

          {pkg.is_trial && (
            <Badge className="bg-amber-500/10 text-amber-600">
              Trial {pkg.trial_period} Days
            </Badge>
          )}
        </div>
      </div>
    </div>
  );
}

export default PackageHeroSection;
