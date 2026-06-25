import type { Package } from "../../types/package.types";

type Props = {
  pkg: Package;
};

function PackageInformationCard({ pkg }: Props) {
  return (
    <div className="rounded-[28px] border border-border p-6">
      <h3 className="text-xl font-black">Package Information</h3>

      <div className="mt-6 grid gap-6 md:grid-cols-2">
        <InfoItem label="Package Name" value={pkg.name} />

        <InfoItem label="Slug" value={pkg.slug} />

        <InfoItem
          label="Status"
          value={pkg.is_active ? "Active" : "Inactive"}
        />

        <InfoItem label="Trial" value={pkg.is_trial ? "Enabled" : "Disabled"} />

        <InfoItem
          label="Created"
          value={new Date(pkg.created_at).toLocaleDateString()}
        />

        <InfoItem
          label="Updated"
          value={new Date(pkg.updated_at).toLocaleDateString()}
        />
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
