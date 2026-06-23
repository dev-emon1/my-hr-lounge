import type { Addon } from "../../types/addon.types";

type Props = {
  addon: Addon;
};

function AddonRevenueCard({ addon }: Props) {
  return (
    <div className="rounded-[28px] border border-border p-6">
      <h3 className="text-xl font-black">Revenue Summary</h3>

      <div className="mt-6 space-y-5">
        <Metric label="Clients Using" value={addon.clientsUsing.toString()} />

        <Metric
          label="Revenue Generated"
          value={`৳ ${addon.revenue.toLocaleString()}`}
        />

        <Metric label="Billing Type" value={addon.billingType} />
      </div>
    </div>
  );
}

function Metric({ label, value }: { label: string; value: string }) {
  return (
    <div className="flex items-center justify-between">
      <span className="text-muted-foreground">{label}</span>

      <span className="font-semibold">{value}</span>
    </div>
  );
}

export default AddonRevenueCard;
