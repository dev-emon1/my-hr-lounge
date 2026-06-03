function SubscriptionHistoryTab() {
  const history = [
    {
      title: "Enterprise Assigned",
      date: "12 May 2026",
    },
    {
      title: "Renewed",
      date: "01 Jan 2026",
    },
    {
      title: "Upgraded from Growth",
      date: "20 Dec 2025",
    },
  ];

  return (
    <div className="rounded-[24px] border border-border p-6">
      <h3 className="font-bold">Subscription Timeline</h3>

      <div className="mt-8 space-y-5">
        {history.map((item) => (
          <div
            key={item.title}
            className="flex items-center justify-between border-b border-border pb-4"
          >
            <span className="font-medium">{item.title}</span>

            <span className="text-sm text-muted-foreground">{item.date}</span>
          </div>
        ))}
      </div>
    </div>
  );
}

export default SubscriptionHistoryTab;
