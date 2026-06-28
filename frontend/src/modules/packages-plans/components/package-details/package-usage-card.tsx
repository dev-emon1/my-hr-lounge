import type { PackageDetails } from "../../types/package-details.types";

type Props = {
  pkg: PackageDetails;
};

function PackageUsageCard({ pkg }: Props) {
  return (
    <div className="rounded-[28px] border border-border p-6">
      <h3 className="text-xl font-black">Usage Summary</h3>

      <div className="mt-6 space-y-4">
        <div className="flex items-center justify-between">
          <span className="text-muted-foreground">Active Clients</span>

          <span className="font-bold">-</span>
        </div>

        <div className="flex items-center justify-between">
          <span className="text-muted-foreground">Trial Available</span>

          <span className="font-bold">{pkg.is_trial ? "Yes" : "No"}</span>
        </div>

        <div className="flex items-center justify-between">
          <span className="text-muted-foreground">Status</span>

          <span className="font-bold">{pkg.status.value}</span>
        </div>

        <div className="flex items-center justify-between">
          <span className="text-muted-foreground">Last Updated</span>

          <span className="font-bold">{pkg.updated_at}</span>
        </div>
      </div>
    </div>
  );
}

export default PackageUsageCard;
