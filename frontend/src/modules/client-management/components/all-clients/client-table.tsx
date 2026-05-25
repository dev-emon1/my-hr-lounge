import type { Client } from "../../types/client.types";

import ClientStatusBadge from "../shared/client-status-badge";

import ClientTableRowActions from "./client-table-row-actions";

type Props = {
  clients: Client[];
};

function ClientTable({ clients }: Props) {
  return (
    <div className="overflow-hidden rounded-[28px] border border-border">
      <div className="overflow-x-auto">
        <table className="w-full">
          <thead className="bg-muted/40">
            <tr>
              <th className="px-6 py-4 text-left text-sm font-bold">Company</th>

              <th className="px-6 py-4 text-left text-sm font-bold">Package</th>

              <th className="px-6 py-4 text-left text-sm font-bold">
                Employees
              </th>

              <th className="px-6 py-4 text-left text-sm font-bold">Storage</th>

              <th className="px-6 py-4 text-left text-sm font-bold">Status</th>

              <th className="px-6 py-4 text-left text-sm font-bold">Created</th>

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

                    <p className="text-sm text-muted-foreground">
                      {client.email}
                    </p>
                  </div>
                </td>

                <td className="px-6 py-5">{client.packageName}</td>

                <td className="px-6 py-5">{client.employees}</td>

                <td className="px-6 py-5">{client.storageUsed}</td>

                <td className="px-6 py-5">
                  <ClientStatusBadge status={client.status} />
                </td>

                <td className="px-6 py-5">{client.createdAt}</td>

                <td className="px-6 py-5 text-right">
                  <ClientTableRowActions />
                </td>
              </tr>
            ))}
          </tbody>
        </table>
      </div>
    </div>
  );
}

export default ClientTable;
