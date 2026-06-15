import type { Addon } from "../../types/addon.types";

type Props = {
  addon: Addon;
};

function AddonPricingCard({ addon }: Props) {
  return (
    <div className="rounded-[28px] border border-border p-6">
      <h3 className="text-xl font-black">Pricing Information</h3>

      <div className="mt-6 grid gap-6 md:grid-cols-2">
        <InfoItem label="Price" value={`৳ ${addon.price.toLocaleString()}`} />

        <InfoItem label="Billing Type" value={addon.billingType} />
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

export default AddonPricingCard;
