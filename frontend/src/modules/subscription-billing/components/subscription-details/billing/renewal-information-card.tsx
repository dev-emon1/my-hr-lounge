function RenewalInformationCard() {
  return (
    <div className="rounded-[28px] border border-border p-6">
      <h3 className="text-xl font-black">Renewal Information</h3>

      <div className="mt-6 grid gap-6 md:grid-cols-3">
        <div>
          <p className="text-sm text-muted-foreground">Renewal Date</p>

          <p className="mt-2 font-semibold">12 May 2027</p>
        </div>

        <div>
          <p className="text-sm text-muted-foreground">Days Remaining</p>

          <p className="mt-2 font-semibold">287 Days</p>
        </div>

        <div>
          <p className="text-sm text-muted-foreground">Renewal Amount</p>

          <p className="mt-2 font-semibold">৳ 50,000</p>
        </div>
      </div>
    </div>
  );
}

export default RenewalInformationCard;
