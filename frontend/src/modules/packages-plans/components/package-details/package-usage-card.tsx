import type { Package } from "../../types/package.types";

type Props = {
  pkg: Package;
};

function PackageUsageCard({ pkg }: Props) {
  return (
    <div className="rounded-[28px] border border-border p-6">
      <h3 className="text-xl font-black">Usage Summary</h3>

      <div className="mt-6 space-y-4">
        <div className="flex items-center justify-between">
          <span className="text-muted-foreground">Active Clients</span>

          <span className="font-bold">{pkg.activeClients}</span>
        </div>

        <div className="flex items-center justify-between">
          <span className="text-muted-foreground">Trial Available</span>

          <span className="font-bold">{pkg.trialAvailable ? "Yes" : "No"}</span>
        </div>

        <div className="flex items-center justify-between">
          <span className="text-muted-foreground">Status</span>

          <span className="font-bold">{pkg.status}</span>
        </div>

        <div className="flex items-center justify-between">
          <span className="text-muted-foreground">Last Updated</span>

          <span className="font-bold">{pkg.updatedAt}</span>
        </div>
      </div>
    </div>
  );
}

export default PackageUsageCard;
