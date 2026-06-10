function InvoiceInformationCard() {
  return (
    <div className="rounded-[28px] border border-border p-6">
      <h3 className="text-xl font-black">Invoice Information</h3>

      <div className="mt-6 grid gap-6 md:grid-cols-2">
        <InfoItem label="Invoice Number" value="INV-2026-001" />

        <InfoItem label="Invoice Type" value="Renewal" />

        <InfoItem label="Amount" value="৳ 50,000" />

        <InfoItem label="Invoice Status" value="Paid" />
      </div>
    </div>
  );
}

const InfoItem = ({ label, value }: { label: string; value: string }) => (
  <div>
    <p className="text-sm text-muted-foreground">{label}</p>

    <p className="mt-1 font-semibold">{value}</p>
  </div>
);

export default InvoiceInformationCard;
