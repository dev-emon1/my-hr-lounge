import { Send, CheckCircle2, XCircle, UserPlus } from "lucide-react";

import { Button } from "@/shared/ui/button";

type Props = {
  status: string;

  onSend: () => void;

  onApprove: () => void;

  onReject: () => void;

  onStartOnboarding: () => void;
};

function QuickActionsCard({
  status,
  onSend,
  onApprove,
  onReject,
  onStartOnboarding,
}: Props) {
  return (
    <div className="rounded-[28px] border border-border p-6">
      <h3 className="text-xl font-black">Quick Actions</h3>

      <div className="mt-6 space-y-3">
        <Button
          variant="outline"
          className="w-full justify-start"
          onClick={onSend}
        >
          <Send size={16} />
          Send Quotation
        </Button>

        {status === "Approved" && (
          <Button className="w-full justify-start" onClick={onStartOnboarding}>
            <UserPlus size={16} />
            Start Client Onboarding
          </Button>
        )}

        {status === "Sent" && (
          <>
            <Button
              variant="outline"
              className="w-full justify-start"
              onClick={onApprove}
            >
              <CheckCircle2 size={16} />
              Approve
            </Button>

            <Button
              variant="outline"
              className="w-full justify-start"
              onClick={onReject}
            >
              <XCircle size={16} />
              Reject
            </Button>
          </>
        )}
      </div>
    </div>
  );
}

export default QuickActionsCard;
