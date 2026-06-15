import { useNavigate } from "react-router-dom";

import {
  MoreHorizontal,
  Eye,
  CheckCircle2,
  XCircle,
  CircleCheckBig,
} from "lucide-react";

import { Button } from "@/shared/ui/button";

import {
  DropdownMenu,
  DropdownMenuContent,
  DropdownMenuItem,
  DropdownMenuTrigger,
} from "@/shared/ui/dropdown-menu";

import type { SubscriptionChange } from "../../types/subscription-change.types";

type Props = {
  change: SubscriptionChange;

  onApprove?: (change: SubscriptionChange) => void;

  onReject?: (change: SubscriptionChange) => void;

  onComplete?: (change: SubscriptionChange) => void;
};

function SubscriptionChangesRowActions({
  change,
  onApprove,
  onReject,
  onComplete,
}: Props) {
  const navigate = useNavigate();

  const isPending = change.status === "Pending";

  const isApproved = change.status === "Approved";

  return (
    <DropdownMenu>
      <DropdownMenuTrigger asChild>
        <Button variant="ghost" size="icon">
          <MoreHorizontal size={18} />
        </Button>
      </DropdownMenuTrigger>

      <DropdownMenuContent align="end">
        <DropdownMenuItem
          onClick={() =>
            navigate(`/billing/subscription-changes/${change.requestNumber}`)
          }
        >
          <Eye size={16} />
          View Details
        </DropdownMenuItem>

        {isPending && (
          <>
            <DropdownMenuItem onClick={() => onApprove?.(change)}>
              <CheckCircle2 size={16} />
              Approve
            </DropdownMenuItem>

            <DropdownMenuItem onClick={() => onReject?.(change)}>
              <XCircle size={16} />
              Reject
            </DropdownMenuItem>
          </>
        )}

        {isApproved && (
          <DropdownMenuItem onClick={() => onComplete?.(change)}>
            <CircleCheckBig size={16} />
            Complete
          </DropdownMenuItem>
        )}
      </DropdownMenuContent>
    </DropdownMenu>
  );
}

export default SubscriptionChangesRowActions;
