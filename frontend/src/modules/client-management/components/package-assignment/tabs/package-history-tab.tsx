function PackageHistoryTab() {
  const history = [
    {
      action: "Enterprise Assigned",

      date: "12 May 2026",
    },

    {
      action: "Upgraded From Growth",

      date: "20 Dec 2025",
    },

    {
      action: "Custom Employee Limit Added",

      date: "10 Jan 2026",
    },

    {
      action: "Renewed Subscription",

      date: "01 Feb 2026",
    },
  ];

  return (
    <div className="rounded-[28px] border border-border p-6">
      <h3 className="text-lg font-bold">Package History</h3>

      <div className="mt-8 space-y-5">
        {history.map((item) => (
          <div
            key={`${item.action}-${item.date}`}
            className="flex items-center justify-between border-b border-border pb-4"
          >
            <span className="font-medium">{item.action}</span>

            <span className="text-sm text-muted-foreground">{item.date}</span>
          </div>
        ))}
      </div>
    </div>
  );
}

export default PackageHistoryTab;
