import type { Addon } from "../../types/addon.types";

import AddonsRowActions from "./addons-row-actions";

type Props = {
  addons: Addon[];

  onEdit: (addon: Addon) => void;
};

function AddonsTable({ addons, onEdit }: Props) {
  return (
    <div className="overflow-hidden rounded-3xl border border-border">
      <div className="overflow-x-auto">
        <table className="w-full">
          <thead className="bg-muted/50">
            <tr>
              <Th>Addon</Th>

              <Th>Category</Th>

              <Th>Price</Th>

              <Th>Billing</Th>

              <Th>Clients</Th>

              <Th>Revenue</Th>

              <Th>Status</Th>

              <Th align="right">Actions</Th>
            </tr>
          </thead>

          <tbody>
            {addons.map((addon) => (
              <tr
                key={addon.id}
                className="border-t border-border transition-colors hover:bg-muted/30"
              >
                <Td>
                  <div>
                    <p className="font-semibold">{addon.name}</p>

                    <p className="text-xs text-muted-foreground">
                      {addon.code}
                    </p>
                  </div>
                </Td>

                <Td>{addon.category}</Td>

                <Td>৳ {addon.price.toLocaleString()}</Td>

                <Td>{addon.billingType}</Td>

                <Td>{addon.clientsUsing}</Td>

                <Td>৳ {addon.revenue.toLocaleString()}</Td>

                <Td>
                  <span
                    className={`inline-flex rounded-full px-3 py-1 text-xs font-semibold ${
                      addon.status === "Active"
                        ? "bg-green-500/10 text-green-600"
                        : "bg-red-500/10 text-red-600"
                    }`}
                  >
                    {addon.status}
                  </span>
                </Td>

                <Td align="right">
                  <AddonsRowActions addon={addon} onEdit={onEdit} />
                </Td>
              </tr>
            ))}
          </tbody>
        </table>
      </div>
    </div>
  );
}

function Th({
  children,
  align = "left",
}: {
  children: React.ReactNode;
  align?: "left" | "right";
}) {
  return (
    <th
      className={`px-6 py-4 text-xs font-bold uppercase tracking-wider text-muted-foreground ${
        align === "right" ? "text-right" : "text-left"
      }`}
    >
      {children}
    </th>
  );
}

function Td({
  children,
  align = "left",
}: {
  children: React.ReactNode;
  align?: "left" | "right";
}) {
  return (
    <td
      className={`px-6 py-4 ${align === "right" ? "text-right" : "text-left"}`}
    >
      {children}
    </td>
  );
}

export default AddonsTable;
