import type { Addon } from "../../types/addon.types";

type Props = {
  addon: Addon;
};

function AddonInformationCard({ addon }: Props) {
  return (
    <div className="rounded-[28px] border border-border p-6">
      <h3 className="text-xl font-black">Addon Information</h3>

      <div className="mt-6 grid gap-6 md:grid-cols-2">
        <InfoItem label="Addon Name" value={addon.name} />

        <InfoItem label="Code" value={addon.code} />

        <InfoItem label="Category" value={addon.category} />

        <InfoItem label="Status" value={addon.status} />
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

export default AddonInformationCard;
