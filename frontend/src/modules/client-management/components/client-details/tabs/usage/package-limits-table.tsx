function PackageLimitsTable() {
  const limits = [
    {
      feature: "Employees",
      limit: 500,
      used: 420,
    },

    {
      feature: "Admins",
      limit: 20,
      used: 8,
    },

    {
      feature: "Branches",
      limit: 10,
      used: 4,
    },

    {
      feature: "Departments",
      limit: 100,
      used: 35,
    },

    {
      feature: "Designations",
      limit: 200,
      used: 58,
    },

    {
      feature: "Storage (GB)",
      limit: 50,
      used: 18,
    },
  ];

  return (
    <div className="overflow-hidden rounded-[28px] border border-border">
      <div className="border-b border-border p-6">
        <h3 className="text-xl font-black">Package Limits</h3>

        <p className="mt-2 text-sm text-muted-foreground">
          Package resource limits and current consumption.
        </p>
      </div>

      <div className="overflow-x-auto">
        <table className="w-full">
          <thead className="bg-muted/40">
            <tr>
              <th className="px-6 py-4 text-left text-sm font-bold">
                Resource
              </th>

              <th className="px-6 py-4 text-left text-sm font-bold">Limit</th>

              <th className="px-6 py-4 text-left text-sm font-bold">Used</th>

              <th className="px-6 py-4 text-left text-sm font-bold">
                Remaining
              </th>

              <th className="px-6 py-4 text-left text-sm font-bold">Usage</th>
            </tr>
          </thead>

          <tbody>
            {limits.map((item) => {
              const percentage = Math.round((item.used / item.limit) * 100);

              const remaining = item.limit - item.used;

              return (
                <tr
                  key={item.feature}
                  className="border-t border-border hover:bg-muted/30"
                >
                  <td className="px-6 py-5 font-medium">{item.feature}</td>

                  <td className="px-6 py-5">{item.limit}</td>

                  <td className="px-6 py-5">{item.used}</td>

                  <td className="px-6 py-5">{remaining}</td>

                  <td className="px-6 py-5">
                    <div className="flex items-center gap-3">
                      <div className="h-2 w-32 overflow-hidden rounded-full bg-muted">
                        <div
                          className={`h-full rounded-full ${
                            percentage >= 90
                              ? "bg-red-500"
                              : percentage >= 70
                                ? "bg-amber-500"
                                : "bg-green-500"
                          }`}
                          style={{
                            width: `${percentage}%`,
                          }}
                        />
                      </div>

                      <span className="text-sm font-medium">{percentage}%</span>
                    </div>
                  </td>
                </tr>
              );
            })}
          </tbody>
        </table>
      </div>
    </div>
  );
}

export default PackageLimitsTable;
