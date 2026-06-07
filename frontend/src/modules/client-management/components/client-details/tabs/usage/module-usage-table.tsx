function ModuleUsageTable() {
  const modules = [
    {
      name: "Employee Management",
      status: "Enabled",
      assignedDate: "12 May 2026",
    },

    {
      name: "Attendance",
      status: "Enabled",
      assignedDate: "12 May 2026",
    },

    {
      name: "Payroll",
      status: "Enabled",
      assignedDate: "15 May 2026",
    },

    {
      name: "Recruitment",
      status: "Enabled",
      assignedDate: "20 May 2026",
    },

    {
      name: "Performance",
      status: "Disabled",
      assignedDate: "-",
    },

    {
      name: "Learning",
      status: "Disabled",
      assignedDate: "-",
    },
  ];

  return (
    <div className="overflow-hidden rounded-[28px] border border-border">
      <div className="border-b border-border p-6">
        <h3 className="text-xl font-black">Module Usage</h3>

        <p className="mt-2 text-sm text-muted-foreground">
          Modules assigned to this client package.
        </p>
      </div>

      <div className="overflow-x-auto">
        <table className="w-full">
          <thead className="bg-muted/40">
            <tr>
              <th className="px-6 py-4 text-left text-sm font-bold">Module</th>

              <th className="px-6 py-4 text-left text-sm font-bold">Status</th>

              <th className="px-6 py-4 text-left text-sm font-bold">
                Assigned Date
              </th>
            </tr>
          </thead>

          <tbody>
            {modules.map((module) => (
              <tr
                key={module.name}
                className="border-t border-border hover:bg-muted/30"
              >
                <td className="px-6 py-5 font-medium">{module.name}</td>

                <td className="px-6 py-5">
                  <span
                    className={`rounded-full px-3 py-1 text-xs font-semibold ${
                      module.status === "Enabled"
                        ? "bg-green-500/10 text-green-600"
                        : "bg-red-500/10 text-red-600"
                    }`}
                  >
                    {module.status}
                  </span>
                </td>

                <td className="px-6 py-5 text-muted-foreground">
                  {module.assignedDate}
                </td>
              </tr>
            ))}
          </tbody>
        </table>
      </div>
    </div>
  );
}

export default ModuleUsageTable;
