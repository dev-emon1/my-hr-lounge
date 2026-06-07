import ArchivedRowActions from "./archived-row-actions";

function ArchivedClientsTable() {
  const clients = [
    {
      id: "1",

      companyName: "Acme Corporation",

      packageName: "Enterprise",

      archivedAt: "15 May 2026",

      archivedBy: "Super Admin",

      reason: "Client Requested Closure",
    },

    {
      id: "2",

      companyName: "NextGen Solutions",

      packageName: "Growth",

      archivedAt: "10 Apr 2026",

      archivedBy: "System",

      reason: "Subscription Expired",
    },

    {
      id: "3",

      companyName: "Vertex Labs",

      packageName: "Custom",

      archivedAt: "28 Mar 2026",

      archivedBy: "Super Admin",

      reason: "Business Closed",
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

              <th className="px-6 py-4 text-left text-sm font-bold">
                Archived At
              </th>

              <th className="px-6 py-4 text-left text-sm font-bold">
                Archived By
              </th>

              <th className="px-6 py-4 text-left text-sm font-bold">Reason</th>

              <th className="px-6 py-4 text-right text-sm font-bold">
                Actions
              </th>
            </tr>
          </thead>

          <tbody>
            {clients.map((client) => (
              <tr
                key={client.id}
                className="border-t border-border hover:bg-muted/30"
              >
                <td className="px-6 py-5 font-semibold">
                  {client.companyName}
                </td>

                <td className="px-6 py-5">{client.packageName}</td>

                <td className="px-6 py-5">{client.archivedAt}</td>

                <td className="px-6 py-5">{client.archivedBy}</td>

                <td className="px-6 py-5">{client.reason}</td>

                <td className="px-6 py-5 text-right">
                  <ArchivedRowActions />
                </td>
              </tr>
            ))}
          </tbody>
        </table>
      </div>
    </div>
  );
}

export default ArchivedClientsTable;
