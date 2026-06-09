function PackageBreakdownCard() {
  return (
    <div className="rounded-[28px] border border-border p-6">
      <h3 className="text-xl font-black">Package Breakdown</h3>

      <div className="mt-6 grid gap-6 md:grid-cols-2">
        <InfoItem label="Package" value="Enterprise" />

        <InfoItem label="Billing Cycle" value="Yearly" />

        <InfoItem label="Employee Limit" value="1000" />

        <InfoItem label="Branch Limit" value="Unlimited" />

        <InfoItem label="Storage" value="500 GB" />

        <InfoItem label="Support" value="Priority Support" />
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

export default PackageBreakdownCard;
