function SubscriptionHealthCard() {
  return (
    <div className="rounded-[28px] border border-border p-6">
      <h3 className="text-xl font-black">Subscription Health</h3>

      <div className="mt-6">
        <div className="flex items-center justify-between">
          <span>Health Score</span>

          <span className="font-black text-green-600">94%</span>
        </div>

        <div className="mt-3 h-3 overflow-hidden rounded-full bg-muted">
          <div
            className="h-full rounded-full bg-green-500"
            style={{
              width: "94%",
            }}
          />
        </div>
      </div>
    </div>
  );
}

export default SubscriptionHealthCard;
