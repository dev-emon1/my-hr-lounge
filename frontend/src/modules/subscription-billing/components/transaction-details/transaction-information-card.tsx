function TransactionInformationCard() {
  return (
    <div className="rounded-[28px] border border-border p-6">
      <h3 className="text-xl font-black">Transaction Information</h3>

      <div className="mt-6 grid gap-6 md:grid-cols-2">
        <InfoItem label="Transaction ID" value="TRX-2026-001" />

        <InfoItem label="Status" value="Successful" />

        <InfoItem label="Gateway" value="SSLCommerz" />

        <InfoItem label="Transaction Date" value="05 Jun 2026" />
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

export default TransactionInformationCard;
