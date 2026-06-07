function SubscriptionChangeTable() {
  const changes = [
    {
      type: "Upgrade",
      details: "Growth → Enterprise",
      date: "12 May 2026",
      performedBy: "Super Admin",
    },

    {
      type: "Renewal",
      details: "Annual Renewal",
      date: "01 Jan 2026",
      performedBy: "System",
    },

    {
      type: "Addon",
      details: "+200 Employees",
      date: "15 Oct 2025",
      performedBy: "Super Admin",
    },
  ];

  return (
    <div className="overflow-hidden rounded-[28px] border border-border">
      <div className="border-b border-border p-6">
        <h3 className="text-xl font-black">Change Logs</h3>
      </div>

      <div className="overflow-x-auto">
        <table className="w-full">
          <thead className="bg-muted/40">
            <tr>
              <th className="px-6 py-4 text-left">Type</th>

              <th className="px-6 py-4 text-left">Details</th>

              <th className="px-6 py-4 text-left">Date</th>

              <th className="px-6 py-4 text-left">Performed By</th>
            </tr>
          </thead>

          <tbody>
            {changes.map((change, index) => (
              <tr
                key={`${change.type}-${index}`}
                className="border-t border-border hover:bg-muted/30"
              >
                <td className="px-6 py-5">{change.type}</td>

                <td className="px-6 py-5">{change.details}</td>

                <td className="px-6 py-5">{change.date}</td>

                <td className="px-6 py-5">{change.performedBy}</td>
              </tr>
            ))}
          </tbody>
        </table>
      </div>
    </div>
  );
}

export default SubscriptionChangeTable;
