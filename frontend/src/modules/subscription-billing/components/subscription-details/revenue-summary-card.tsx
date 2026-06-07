function RevenueSummaryCard() {
  return (
    <div className="rounded-[28px] border border-border p-6">
      <h3 className="text-xl font-black">Revenue Summary</h3>

      <div className="mt-6 space-y-5">
        <div>
          <p className="text-sm text-muted-foreground">Monthly Revenue</p>

          <h4 className="text-2xl font-black">$499</h4>
        </div>

        <div>
          <p className="text-sm text-muted-foreground">Annual Revenue</p>

          <h4 className="text-2xl font-black">$5,988</h4>
        </div>
      </div>
    </div>
  );
}

export default RevenueSummaryCard;
