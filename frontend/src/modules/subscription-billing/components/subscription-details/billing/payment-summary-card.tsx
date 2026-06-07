function PaymentSummaryCard() {
  return (
    <div className="rounded-[28px] border border-border p-6">
      <h3 className="text-xl font-black">Payment Summary</h3>

      <div className="mt-6 grid gap-6 md:grid-cols-3">
        <div>
          <p className="text-sm text-muted-foreground">Total Paid</p>

          <h4 className="mt-2 text-2xl font-black">৳ 250,000</h4>
        </div>

        <div>
          <p className="text-sm text-muted-foreground">Last Payment</p>

          <h4 className="mt-2 text-lg font-bold">৳ 50,000</h4>
        </div>

        <div>
          <p className="text-sm text-muted-foreground">Last Payment Date</p>

          <h4 className="mt-2 text-lg font-bold">12 May 2026</h4>
        </div>
      </div>
    </div>
  );
}

export default PaymentSummaryCard;
