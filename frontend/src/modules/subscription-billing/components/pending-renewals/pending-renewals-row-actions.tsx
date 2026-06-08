import { useNavigate } from "react-router-dom";

import { Bell, Eye, FileText, MoreHorizontal, RefreshCw } from "lucide-react";

import { Button } from "@/shared/ui/button";

import {
  DropdownMenu,
  DropdownMenuContent,
  DropdownMenuItem,
  DropdownMenuTrigger,
} from "@/shared/ui/dropdown-menu";

import type { Renewal } from "../../types/renewal.types";

type Props = {
  renewal: Renewal;

  onRenew: (renewal: Renewal) => void;

  onReminder: (renewal: Renewal) => void;

  onGenerateInvoice: (renewal: Renewal) => void;
};

function PendingRenewalsRowActions({
  renewal,
  onRenew,
  onReminder,
  onGenerateInvoice,
}: Props) {
  const navigate = useNavigate();

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
            navigate(`/subscription-billing/subscriptions/${renewal.id}`)
          }
        >
          <Eye size={16} />
          View Details
        </DropdownMenuItem>

        <DropdownMenuItem onClick={() => onRenew(renewal)}>
          <RefreshCw size={16} />
          Renew Now
        </DropdownMenuItem>

        <DropdownMenuItem onClick={() => onReminder(renewal)}>
          <Bell size={16} />
          Send Reminder
        </DropdownMenuItem>

        <DropdownMenuItem onClick={() => onGenerateInvoice(renewal)}>
          <FileText size={16} />
          Generate Invoice
        </DropdownMenuItem>
      </DropdownMenuContent>
    </DropdownMenu>
  );
}

export default PendingRenewalsRowActions;
