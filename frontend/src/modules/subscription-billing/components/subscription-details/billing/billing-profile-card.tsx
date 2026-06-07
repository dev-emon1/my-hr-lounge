function BillingProfileCard() {
  return (
    <div className="rounded-[28px] border border-border p-6">
      <h3 className="text-xl font-black">Billing Profile</h3>

      <div className="mt-6 grid gap-6 md:grid-cols-2">
        <div>
          <p className="text-sm text-muted-foreground">Billing Cycle</p>

          <p className="mt-2 font-semibold">Yearly</p>
        </div>

        <div>
          <p className="text-sm text-muted-foreground">Payment Method</p>

          <p className="mt-2 font-semibold">Bank Transfer</p>
        </div>

        <div>
          <p className="text-sm text-muted-foreground">Currency</p>

          <p className="mt-2 font-semibold">BDT</p>
        </div>

        <div>
          <p className="text-sm text-muted-foreground">Auto Renewal</p>

          <p className="mt-2 font-semibold">Enabled</p>
        </div>
      </div>
    </div>
  );
}

export default BillingProfileCard;
