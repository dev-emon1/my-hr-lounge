import { useNavigate } from "react-router-dom";

import {
  ArrowUpCircle,
  Eye,
  FileText,
  MoreHorizontal,
  Mail,
} from "lucide-react";

import { Button } from "@/shared/ui/button";

import {
  DropdownMenu,
  DropdownMenuContent,
  DropdownMenuItem,
  DropdownMenuTrigger,
} from "@/shared/ui/dropdown-menu";

import type { ExpiredSubscription } from "../../types/expired-subscription.types";

type Props = {
  subscription: ExpiredSubscription;

  onReactivate: (subscription: ExpiredSubscription) => void;

  onGenerateInvoice: (subscription: ExpiredSubscription) => void;

  onContactClient: (subscription: ExpiredSubscription) => void;
};

function ExpiredPlansRowActions({
  subscription,
  onReactivate,
  onGenerateInvoice,
  onContactClient,
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
            navigate(`/subscription-billing/subscriptions/${subscription.id}`)
          }
        >
          <Eye size={16} />
          View Details
        </DropdownMenuItem>

        <DropdownMenuItem onClick={() => onReactivate(subscription)}>
          <ArrowUpCircle size={16} />
          Reactivate Subscription
        </DropdownMenuItem>

        <DropdownMenuItem onClick={() => onGenerateInvoice(subscription)}>
          <FileText size={16} />
          Generate Invoice
        </DropdownMenuItem>

        <DropdownMenuItem onClick={() => onContactClient(subscription)}>
          <Mail size={16} />
          Contact Client
        </DropdownMenuItem>
      </DropdownMenuContent>
    </DropdownMenu>
  );
}

export default ExpiredPlansRowActions;
