import { useNavigate } from "react-router-dom";

import {
  Eye,
  Pencil,
  Send,
  CheckCircle2,
  XCircle,
  UserPlus,
  MoreHorizontal,
} from "lucide-react";

import { Button } from "@/shared/ui/button";

import {
  DropdownMenu,
  DropdownMenuContent,
  DropdownMenuItem,
  DropdownMenuTrigger,
} from "@/shared/ui/dropdown-menu";

import type { Quotation } from "../../types/quotation.types";

type Props = {
  quotation: Quotation;

  onSend: (quotation: Quotation) => void;

  onApprove: (quotation: Quotation) => void;

  onReject: (quotation: Quotation) => void;

  onStartOnboarding: (quotation: Quotation) => void;
};

function QuotationsRowActions({
  quotation,
  onSend,
  onApprove,
  onReject,
  onStartOnboarding,
}: Props) {
  const navigate = useNavigate();

  const isDraft = quotation.status === "Draft";

  const isSent = quotation.status === "Sent";

  const isApproved = quotation.status === "Approved";

  const canEdit = quotation.status === "Draft" || quotation.status === "Sent";

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
            navigate(`/billing/quotations/${quotation.quotationNumber}`)
          }
        >
          <Eye size={16} />
          View Details
        </DropdownMenuItem>

        {canEdit && (
          <DropdownMenuItem
            onClick={() =>
              navigate(`/billing/quotations/${quotation.quotationNumber}/edit`)
            }
          >
            <Pencil size={16} />
            Edit Quotation
          </DropdownMenuItem>
        )}

        {isDraft && (
          <DropdownMenuItem onClick={() => onSend(quotation)}>
            <Send size={16} />
            Send Quotation
          </DropdownMenuItem>
        )}

        {isSent && (
          <>
            <DropdownMenuItem onClick={() => onApprove(quotation)}>
              <CheckCircle2 size={16} />
              Approve
            </DropdownMenuItem>

            <DropdownMenuItem onClick={() => onReject(quotation)}>
              <XCircle size={16} />
              Reject
            </DropdownMenuItem>
          </>
        )}

        {isApproved && (
          <DropdownMenuItem onClick={() => onStartOnboarding(quotation)}>
            <UserPlus size={16} />
            Start Client Onboarding
          </DropdownMenuItem>
        )}
      </DropdownMenuContent>
    </DropdownMenu>
  );
}

export default QuotationsRowActions;
