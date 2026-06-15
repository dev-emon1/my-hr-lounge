import type { Addon } from "../../types/addon.types";

type Props = {
  addon: Addon;
};

function AddonClientsCard({ addon }: Props) {
  return (
    <div className="rounded-[28px] border border-border p-6">
      <h3 className="text-xl font-black">Subscribed Clients</h3>

      <div className="mt-6 space-y-4">
        {addon.subscribedClients.length === 0 ? (
          <p className="text-sm text-muted-foreground">
            No subscribed clients found.
          </p>
        ) : (
          addon.subscribedClients.map((client) => (
            <div
              key={client.id}
              className="rounded-2xl border border-border p-4"
            >
              <p className="font-semibold">{client.clientName}</p>

              <p className="mt-1 text-sm text-muted-foreground">
                {client.subscribedDate}
              </p>
            </div>
          ))
        )}
      </div>
    </div>
  );
}

export default AddonClientsCard;
