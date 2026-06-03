import ActivityRowActions from "./activity-row-actions";

function ActivityTable() {
  const activities = [
    {
      id: "1",

      timestamp: "03 Jun 2026, 10:42 AM",

      client: "Acme Corporation",

      user: "John Smith",

      activity: "Employee Created",

      module: "Employee Management",

      ipAddress: "103.145.10.55",

      status: "Success",
    },

    {
      id: "2",

      timestamp: "03 Jun 2026, 09:15 AM",

      client: "NextGen Solutions",

      user: "Sarah Ahmed",

      activity: "Payroll Processed",

      module: "Payroll",

      ipAddress: "192.168.1.11",

      status: "Success",
    },

    {
      id: "3",

      timestamp: "02 Jun 2026, 11:58 PM",

      client: "Vertex Labs",

      user: "Admin",

      activity: "Login Failed",

      module: "Authentication",

      ipAddress: "45.12.45.78",

      status: "Failed",
    },
  ];

  return (
    <div className="overflow-hidden rounded-[28px] border border-border">
      <div className="overflow-x-auto">
        <table className="w-full">
          <thead className="bg-muted/40">
            <tr>
              <th className="px-6 py-4 text-left text-sm font-bold">
                Timestamp
              </th>

              <th className="px-6 py-4 text-left text-sm font-bold">Client</th>

              <th className="px-6 py-4 text-left text-sm font-bold">User</th>

              <th className="px-6 py-4 text-left text-sm font-bold">
                Activity
              </th>

              <th className="px-6 py-4 text-left text-sm font-bold">Module</th>

              <th className="px-6 py-4 text-left text-sm font-bold">
                IP Address
              </th>

              <th className="px-6 py-4 text-left text-sm font-bold">Status</th>

              <th className="px-6 py-4 text-right text-sm font-bold">
                Actions
              </th>
            </tr>
          </thead>

          <tbody>
            {activities.map((activity) => (
              <tr
                key={activity.id}
                className="border-t border-border hover:bg-muted/30"
              >
                <td className="px-6 py-5">{activity.timestamp}</td>

                <td className="px-6 py-5 font-medium">{activity.client}</td>

                <td className="px-6 py-5">{activity.user}</td>

                <td className="px-6 py-5">{activity.activity}</td>

                <td className="px-6 py-5">{activity.module}</td>

                <td className="px-6 py-5">{activity.ipAddress}</td>

                <td className="px-6 py-5">
                  <span
                    className={
                      activity.status === "Success"
                        ? "font-semibold text-green-600"
                        : "font-semibold text-red-600"
                    }
                  >
                    {activity.status}
                  </span>
                </td>

                <td className="px-6 py-5 text-right">
                  <ActivityRowActions />
                </td>
              </tr>
            ))}
          </tbody>
        </table>
      </div>
    </div>
  );
}

export default ActivityTable;
