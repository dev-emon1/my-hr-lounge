import SuspendedRowActions from "./suspended-row-actions";

function SuspendedClientsTable() {
  const clients = [
    {
      id: "1",

      companyName: "Acme Corporation",

      reason: "Payment Overdue",

      suspendedAt: "12 May 2026",

      expiryDate: "12 Jun 2026",

      type: "Temporary",

      status: "Suspended",
    },

    {
      id: "2",

      companyName: "NextGen Solutions",

      reason: "Security Violation",

      suspendedAt: "20 Apr 2026",

      expiryDate: "-",

      type: "Permanent",

      status: "Suspended",
    },

    {
      id: "3",

      companyName: "Vertex Labs",

      reason: "Manual Suspension",

      suspendedAt: "01 Jun 2026",

      expiryDate: "15 Jun 2026",

      type: "Temporary",

      status: "Suspended",
    },
  ];

  return (
    <div className="overflow-hidden rounded-[28px] border border-border">
      <div className="overflow-x-auto">
        <table className="w-full">
          <thead className="bg-muted/40">
            <tr>
              <th className="px-6 py-4 text-left text-sm font-bold">Client</th>

              <th className="px-6 py-4 text-left text-sm font-bold">Reason</th>

              <th className="px-6 py-4 text-left text-sm font-bold">
                Suspended At
              </th>

              <th className="px-6 py-4 text-left text-sm font-bold">Expiry</th>

              <th className="px-6 py-4 text-left text-sm font-bold">Type</th>

              <th className="px-6 py-4 text-left text-sm font-bold">Status</th>

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

                <td className="px-6 py-5">{client.reason}</td>

                <td className="px-6 py-5">{client.suspendedAt}</td>

                <td className="px-6 py-5">{client.expiryDate}</td>

                <td className="px-6 py-5">
                  <span
                    className={
                      client.type === "Temporary"
                        ? "font-medium text-amber-600"
                        : "font-medium text-red-600"
                    }
                  >
                    {client.type}
                  </span>
                </td>

                <td className="px-6 py-5">
                  <span className="font-semibold text-red-600">
                    {client.status}
                  </span>
                </td>

                <td className="px-6 py-5 text-right">
                  <SuspendedRowActions />
                </td>
              </tr>
            ))}
          </tbody>
        </table>
      </div>
    </div>
  );
}

export default SuspendedClientsTable;
