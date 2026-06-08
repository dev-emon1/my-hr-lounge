function AuditTimelineCard() {
  const activities = [
    {
      id: 1,
      title: "Transaction created",
      date: "05 Jun 2026",
    },

    {
      id: 2,
      title: "Payment verified",
      date: "05 Jun 2026",
    },

    {
      id: 3,
      title: "Invoice marked paid",
      date: "05 Jun 2026",
    },
  ];

  return (
    <div className="rounded-[28px] border border-border p-6">
      <h3 className="text-xl font-black">Audit Timeline</h3>

      <div className="mt-6 space-y-5">
        {activities.map((item) => (
          <div key={item.id} className="border-l-2 border-border pl-4">
            <p className="font-medium">{item.title}</p>

            <p className="mt-1 text-sm text-muted-foreground">{item.date}</p>
          </div>
        ))}
      </div>
    </div>
  );
}

export default AuditTimelineCard;
