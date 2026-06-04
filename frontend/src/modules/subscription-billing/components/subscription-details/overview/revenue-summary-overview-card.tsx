function RevenueSummaryOverviewCard() {
  return (
    <div className="rounded-[28px] border border-border p-6">
      <h3 className="text-xl font-black">Revenue Summary</h3>

      <div className="mt-6 grid gap-6 md:grid-cols-3">
        <div>
          <p className="text-sm text-muted-foreground">Package Price</p>

          <h4 className="mt-2 text-2xl font-black">$4,999</h4>
        </div>

        <div>
          <p className="text-sm text-muted-foreground">Total Revenue</p>

          <h4 className="mt-2 text-2xl font-black">$24,995</h4>
        </div>

        <div>
          <p className="text-sm text-muted-foreground">Outstanding</p>

          <h4 className="mt-2 text-2xl font-black">$0</h4>
        </div>
      </div>
    </div>
  );
}

export default RevenueSummaryOverviewCard;
