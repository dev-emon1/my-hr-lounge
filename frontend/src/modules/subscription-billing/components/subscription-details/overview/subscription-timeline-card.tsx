function SubscriptionTimelineCard() {
  const timeline = [
    {
      title: "Subscription Created",
      date: "12 May 2026",
    },

    {
      title: "Invoice Generated",
      date: "12 May 2026",
    },

    {
      title: "Payment Received",
      date: "13 May 2026",
    },

    {
      title: "Subscription Activated",
      date: "13 May 2026",
    },
  ];

  return (
    <div className="rounded-[28px] border border-border p-6">
      <h3 className="text-xl font-black">Subscription Timeline</h3>

      <div className="mt-8 space-y-5">
        {timeline.map((item) => (
          <div key={item.title}>
            <h4 className="font-semibold">{item.title}</h4>

            <p className="text-sm text-muted-foreground">{item.date}</p>
          </div>
        ))}
      </div>
    </div>
  );
}

export default SubscriptionTimelineCard;
