function ActivityTimelineCard() {
  const activities = [
    {
      id: 1,
      title: "Invoice created",
      date: "01 Jun 2026",
    },

    {
      id: 2,
      title: "Reminder email sent",
      date: "05 Jun 2026",
    },

    {
      id: 3,
      title: "Viewed by client",
      date: "06 Jun 2026",
    },
  ];

  return (
    <div className="rounded-[28px] border border-border p-6">
      <h3 className="text-xl font-black">Activity Timeline</h3>

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

export default ActivityTimelineCard;
