import type { Package } from "../../types/package.types";

type Props = {
  pkg: Package;
};

function PackageInformationCard({ pkg }: Props) {
  return (
    <div className="rounded-[28px] border border-border p-6">
      <h3 className="text-xl font-black">Package Information</h3>

      <div className="mt-6 grid gap-6 md:grid-cols-2">
        <InfoItem label="Package Name" value={pkg.packageName} />

        <InfoItem label="Package Code" value={pkg.packageCode} />

        <InfoItem label="Status" value={pkg.status} />

        <InfoItem
          label="Trial Available"
          value={pkg.trialAvailable ? "Yes" : "No"}
        />

        <InfoItem label="Created" value={pkg.createdAt} />

        <InfoItem label="Updated" value={pkg.updatedAt} />
      </div>
    </div>
  );
}

function InfoItem({ label, value }: { label: string; value: string }) {
  return (
    <div>
      <p className="text-sm text-muted-foreground">{label}</p>

      <p className="mt-1 font-semibold">{value}</p>
    </div>
  );
}

export default PackageInformationCard;
