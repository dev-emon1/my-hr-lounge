function InvoiceInformationCard() {
  return (
    <div className="rounded-[28px] border border-border p-6">
      <h3 className="text-xl font-black">Invoice Information</h3>

      <div className="mt-6 grid gap-6 md:grid-cols-2">
        <InfoItem label="Invoice Number" value="INV-2026-001" />

        <InfoItem label="Invoice Type" value="Renewal" />

        <InfoItem label="Issue Date" value="01 Jun 2026" />

        <InfoItem label="Due Date" value="10 Jun 2026" />
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

export default InvoiceInformationCard;
