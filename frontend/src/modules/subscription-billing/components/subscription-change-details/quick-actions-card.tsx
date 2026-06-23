import { CheckCircle2, XCircle, CircleCheckBig } from "lucide-react";

import { Button } from "@/shared/ui/button";

import type { SubscriptionChange } from "../../types/subscription-change.types";

type Props = {
  change: SubscriptionChange;

  onApprove?: () => void;

  onReject?: () => void;

  onComplete?: () => void;
};

function QuickActionsCard({ change, onApprove, onReject, onComplete }: Props) {
  const isPending = change.status === "Pending";

  const isApproved = change.status === "Approved";

  return (
    <div className="rounded-[28px] border border-border p-6">
      <h3 className="text-xl font-black">Quick Actions</h3>

      <div className="mt-6 space-y-3">
        {isPending && (
          <>
            <Button className="w-full justify-start" onClick={onApprove}>
              <CheckCircle2 size={16} />
              Approve Request
            </Button>

            <Button
              variant="outline"
              className="w-full justify-start"
              onClick={onReject}
            >
              <XCircle size={16} />
              Reject Request
            </Button>
          </>
        )}

        {isApproved && (
          <Button className="w-full justify-start" onClick={onComplete}>
            <CircleCheckBig size={16} />
            Complete Change
          </Button>
        )}
      </div>
    </div>
  );
}

export default QuickActionsCard;
