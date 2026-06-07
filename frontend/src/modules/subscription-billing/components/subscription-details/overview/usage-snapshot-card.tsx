function UsageSnapshotCard() {
  const resources = [
    {
      label: "Employees",
      value: "420 / 500",
    },

    {
      label: "Storage",
      value: "18 GB / 50 GB",
    },

    {
      label: "Branches",
      value: "4 / 10",
    },

    {
      label: "Admins",
      value: "8 / 20",
    },
  ];

  return (
    <div className="rounded-[28px] border border-border p-6">
      <h3 className="text-xl font-black">Usage Snapshot</h3>

      <div className="mt-6 grid gap-6 md:grid-cols-2">
        {resources.map((resource) => (
          <div key={resource.label}>
            <p className="text-sm text-muted-foreground">{resource.label}</p>

            <p className="mt-2 font-semibold">{resource.value}</p>
          </div>
        ))}
      </div>
    </div>
  );
}

export default UsageSnapshotCard;
