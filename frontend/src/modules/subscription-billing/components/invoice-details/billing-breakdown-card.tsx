function BillingBreakdownCard() {
  return (
    <div className="rounded-[28px] border border-border p-6">
      <h3 className="text-xl font-black">Billing Breakdown</h3>

      <div className="mt-6 space-y-4">
        <Row label="Package Renewal" value="৳ 50,000" />

        <Row label="VAT" value="৳ 0" />

        <Row label="Discount" value="৳ 0" />

        <div className="border-t pt-4">
          <Row label="Total Amount" value="৳ 50,000" bold />
        </div>
      </div>
    </div>
  );
}

function Row({
  label,
  value,
  bold,
}: {
  label: string;
  value: string;
  bold?: boolean;
}) {
  return (
    <div className="flex items-center justify-between">
      <span className="text-muted-foreground">{label}</span>

      <span className={bold ? "font-black" : "font-medium"}>{value}</span>
    </div>
  );
}

export default BillingBreakdownCard;
