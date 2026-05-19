const activities = [
  {
    title: "New company subscription activated",

    time: "5 min ago",
  },

  {
    title: "Payroll module updated",

    time: "15 min ago",
  },

  {
    title: "New HR admin created",

    time: "1 hour ago",
  },

  {
    title: "Security patch deployed",

    time: "3 hours ago",
  },
];

function RecentActivity() {
  return (
    <div className="rounded-3xl border border-border bg-card p-6 shadow-sm">
      <div className="mb-6">
        <h3 className="text-xl font-bold">Recent Activity</h3>

        <p className="text-sm text-muted-foreground">
          Latest platform activities
        </p>
      </div>

      <div className="space-y-5">
        {activities.map((activity) => (
          <div key={activity.title} className="flex items-start gap-4">
            <div className="mt-1 h-3 w-3 rounded-full bg-primary" />

            <div>
              <p className="text-sm font-medium">{activity.title}</p>

              <p className="text-xs text-muted-foreground">{activity.time}</p>
            </div>
          </div>
        ))}
      </div>
    </div>
  );
}

export default RecentActivity;
