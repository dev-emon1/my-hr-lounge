import type { SubscriptionChange } from "../../types/subscription-change.types";

type Props = {
  change: SubscriptionChange;
};

function ChangeHealthCard({ change }: Props) {
  return (
    <div className="rounded-[28px] border border-border p-6">
      <h3 className="text-xl font-black">Request Health</h3>

      <div className="mt-6 space-y-4">
        <Row label="Status" value={change.status} />

        <Row label="Type" value={change.changeType} />

        <Row label="Requested By" value={change.requestedBy} />

        <Row
          label="Amount Impact"
          value={`৳ ${change.estimatedAmount.toLocaleString()}`}
        />
      </div>
    </div>
  );
}

function Row({ label, value }: { label: string; value: string }) {
  return (
    <div className="flex justify-between">
      <span className="text-muted-foreground">{label}</span>

      <span className="font-semibold">{value}</span>
    </div>
  );
}

export default ChangeHealthCard;
