import PackageRowActions from "./package-row-actions";

function PackageAssignmentTable() {
  const clients = [
    {
      id: "1",

      companyName: "Acme Corporation",

      packageName: "Enterprise",

      billingCycle: "Yearly",

      revenue: "৳120,000",

      employees: "5000",

      storage: "2 TB",

      expiry: "31 Dec 2026",
    },

    {
      id: "2",

      companyName: "NextGen Solutions",

      packageName: "Growth",

      billingCycle: "Monthly",

      revenue: "৳50,000",

      employees: "1000",

      storage: "500 GB",

      expiry: "20 Aug 2026",
    },

    {
      id: "3",

      companyName: "Vertex Labs",

      packageName: "Custom",

      billingCycle: "Yearly",

      revenue: "৳200,000",

      employees: "10000",

      storage: "5 TB",

      expiry: "10 Jan 2027",
    },
  ];

  return (
    <div className="overflow-hidden rounded-[28px] border border-border">
      <div className="overflow-x-auto">
        <table className="w-full">
          <thead className="bg-muted/40">
            <tr>
              <th className="px-6 py-4 text-left text-sm font-bold">Client</th>

              <th className="px-6 py-4 text-left text-sm font-bold">Package</th>

              <th className="px-6 py-4 text-left text-sm font-bold">Billing</th>

              <th className="px-6 py-4 text-left text-sm font-bold">Revenue</th>

              <th className="px-6 py-4 text-left text-sm font-bold">
                Employees
              </th>

              <th className="px-6 py-4 text-left text-sm font-bold">Storage</th>

              <th className="px-6 py-4 text-left text-sm font-bold">Expiry</th>

              <th className="px-6 py-4 text-right text-sm font-bold">
                Actions
              </th>
            </tr>
          </thead>

          <tbody>
            {clients.map((client) => (
              <tr
                key={client.id}
                className="border-t border-border transition-colors hover:bg-muted/30"
              >
                <td className="px-6 py-5">
                  <div>
                    <h4 className="font-semibold">{client.companyName}</h4>
                  </div>
                </td>

                <td className="px-6 py-5">{client.packageName}</td>

                <td className="px-6 py-5">{client.billingCycle}</td>

                <td className="px-6 py-5 font-semibold">{client.revenue}</td>

                <td className="px-6 py-5">{client.employees}</td>

                <td className="px-6 py-5">{client.storage}</td>

                <td className="px-6 py-5">{client.expiry}</td>

                <td className="px-6 py-5 text-right">
                  <PackageRowActions />
                </td>
              </tr>
            ))}
          </tbody>
        </table>
      </div>
    </div>
  );
}

export default PackageAssignmentTable;
