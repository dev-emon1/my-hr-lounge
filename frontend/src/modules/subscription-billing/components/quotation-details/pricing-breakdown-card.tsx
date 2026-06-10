function PricingBreakdownCard() {
  return (
    <div className="rounded-[28px] border border-border p-6">
      <h3 className="text-xl font-black">Pricing Breakdown</h3>

      <div className="mt-6 space-y-4">
        <Row label="Base Package" value="৳ 80,000" />

        <Row label="Addon Cost" value="৳ 10,000" />

        <Row label="Discount" value="- ৳ 5,000" />

        <div className="border-t border-border pt-4">
          <Row label="Final Price" value="৳ 85,000" strong />
        </div>
      </div>
    </div>
  );
}

function Row({
  label,
  value,
  strong,
}: {
  label: string;
  value: string;
  strong?: boolean;
}) {
  return (
    <div className="flex items-center justify-between">
      <span className="text-muted-foreground">{label}</span>

      <span className={strong ? "font-black" : "font-medium"}>{value}</span>
    </div>
  );
}

export default PricingBreakdownCard;
