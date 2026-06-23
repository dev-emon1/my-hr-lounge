import type { SubscriptionChange } from "../../types/subscription-change.types";

type Props = {
  change: SubscriptionChange;
};

function ChangeReasonCard({ change }: Props) {
  return (
    <div className="rounded-[28px] border border-border p-6">
      <h3 className="text-xl font-black">Change Reason</h3>

      <div className="mt-6 rounded-2xl border border-border p-5">
        <p className="leading-7 text-muted-foreground">
          {change.reason || "No reason provided."}
        </p>
      </div>
    </div>
  );
}

export default ChangeReasonCard;
