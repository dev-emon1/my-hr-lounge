import { Badge } from "@/shared/ui/badge";

import type { Package } from "../../types/package.types";

type Props = {
  pkg: Package;
};

function PackageHeroSection({ pkg }: Props) {
  return (
    <div className="rounded-[32px] border border-border bg-card/60 p-8">
      <div className="flex flex-col gap-6 lg:flex-row lg:items-center lg:justify-between">
        <div>
          <h1 className="text-4xl font-black">{pkg.packageName}</h1>

          <p className="mt-3 text-muted-foreground">{pkg.packageCode}</p>
        </div>

        <div className="flex flex-wrap gap-3">
          <Badge className="bg-blue-500/10 text-blue-600">
            {pkg.activeClients} Clients
          </Badge>

          <Badge className="bg-emerald-500/10 text-emerald-600">
            {pkg.status}
          </Badge>

          {pkg.trialAvailable && (
            <Badge className="bg-amber-500/10 text-amber-600">
              Trial Available
            </Badge>
          )}
        </div>
      </div>
    </div>
  );
}

export default PackageHeroSection;
