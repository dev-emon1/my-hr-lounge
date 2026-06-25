import type { Package } from "../../types/package.types";

type Props = {
  pkg: Package;
};

function PackagePricingCard({ pkg }: Props) {
  const monthly = Number(pkg.price_monthly);
  const yearly = Number(pkg.price_yearly);

  return (
    <div className="rounded-[28px] border border-border p-6">
      <h3 className="text-xl font-black">Pricing Information</h3>

      <div className="mt-6 space-y-4">
        <PriceRow
          label="Monthly Price"
          value={`৳ ${monthly.toLocaleString()}`}
        />

        <PriceRow label="Yearly Price" value={`৳ ${yearly.toLocaleString()}`} />

        <div className="border-t border-border pt-4">
          <PriceRow
            label="Annual Savings"
            value={`৳ ${(monthly * 12 - yearly).toLocaleString()}`}
            strong
          />
        </div>
      </div>
    </div>
  );
}

type PriceRowProps = {
  label: string;
  value: string;
  strong?: boolean;
};

function PriceRow({ label, value, strong }: PriceRowProps) {
  return (
    <div className="flex items-center justify-between">
      <span className="text-muted-foreground">{label}</span>

      <span className={strong ? "font-black text-primary" : "font-semibold"}>
        {value}
      </span>
    </div>
  );
}

export default PackagePricingCard;
