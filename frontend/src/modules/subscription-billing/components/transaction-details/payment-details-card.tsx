function PaymentDetailsCard() {
  return (
    <div className="rounded-[28px] border border-border p-6">
      <h3 className="text-xl font-black">Payment Details</h3>

      <div className="mt-6 grid gap-6 md:grid-cols-2">
        <InfoItem label="Payment Method" value="Bank Transfer" />

        <InfoItem label="Gateway" value="SSLCommerz" />

        <InfoItem label="Collected Amount" value="৳ 50,000" />

        <InfoItem label="Currency" value="BDT" />

        <InfoItem label="Reference Number" value="REF-458792" />

        <InfoItem label="Collected By" value="System" />
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

export default PaymentDetailsCard;
