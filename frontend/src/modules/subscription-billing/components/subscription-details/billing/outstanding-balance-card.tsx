function OutstandingBalanceCard() {
  return (
    <div className="rounded-[28px] border border-border p-6">
      <h3 className="text-xl font-black">Outstanding Balance</h3>

      <div className="mt-6 flex items-center justify-between">
        <div>
          <p className="text-sm text-muted-foreground">Due Amount</p>

          <h4 className="mt-2 text-3xl font-black text-green-600">৳ 0</h4>
        </div>

        <div className="rounded-full bg-green-500/10 px-4 py-2 text-sm font-semibold text-green-600">
          Paid
        </div>
      </div>
    </div>
  );
}

export default OutstandingBalanceCard;
