function QuotationInformationCard() {
  return (
    <div className="rounded-[28px] border border-border p-6">
      <h3 className="text-xl font-black">Quotation Information</h3>

      <div className="mt-6 grid gap-6 md:grid-cols-2">
        <InfoItem label="Quotation Number" value="QT-2026-001" />

        <InfoItem label="Status" value="Approved" />

        <InfoItem label="Issue Date" value="01 Jun 2026" />

        <InfoItem label="Expiry Date" value="30 Jun 2026" />

        <InfoItem label="Billing Cycle" value="Yearly" />

        <InfoItem label="Prepared By" value="Super Admin" />
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

export default QuotationInformationCard;
