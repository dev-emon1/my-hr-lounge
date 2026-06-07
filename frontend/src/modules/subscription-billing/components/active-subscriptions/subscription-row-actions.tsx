import { useState } from "react";

import {
  CreditCard,
  Eye,
  FileText,
  MoreHorizontal,
  RefreshCw,
  TrendingUp,
} from "lucide-react";

import { Button } from "@/shared/ui/button";

import { useNavigate } from "react-router-dom";

import RenewSubscriptionModal from "../subscription-details/dialogs/renew-subscription-modal";

import UpgradePackageModal from "../subscription-details/dialogs/upgrade-package-modal";

import GenerateInvoiceModal from "../subscription-details/dialogs/generate-invoice-modal";

import {
  DropdownMenu,
  DropdownMenuContent,
  DropdownMenuItem,
  DropdownMenuTrigger,
} from "@/shared/ui/dropdown-menu";

import type { Subscription } from "../../types/subscription.types";

type Props = {
  subscription: Subscription;

  onRenew: (subscription: Subscription) => void;

  onUpgrade: (subscription: Subscription) => void;

  onGenerateInvoice: (subscription: Subscription) => void;
};

function SubscriptionRowActions({
  subscription,
  onRenew,
  onUpgrade,
  onGenerateInvoice,
}: Props) {
  const navigate = useNavigate();

  return (
    <>
      <DropdownMenu>
        <DropdownMenuTrigger asChild>
          <Button size="icon" variant="ghost" className="rounded-xl">
            <MoreHorizontal size={18} />
          </Button>
        </DropdownMenuTrigger>

        <DropdownMenuContent align="end" className="w-60 rounded-2xl">
          <DropdownMenuItem
            className="cursor-pointer"
            onClick={() =>
              navigate(`/subscription-billing/subscriptions/${subscription.id}`)
            }
          >
            <Eye size={16} />

            <span>View Subscription</span>
          </DropdownMenuItem>

          <DropdownMenuItem
            className="cursor-pointer"
            onClick={() => onRenew(subscription)}
          >
            <RefreshCw size={16} />

            <span>Renew Subscription</span>
          </DropdownMenuItem>

          <DropdownMenuItem
            className="cursor-pointer"
            onClick={() => onUpgrade(subscription)}
          >
            <TrendingUp size={16} />

            <span>Upgrade Package</span>
          </DropdownMenuItem>

          <DropdownMenuItem
            className="cursor-pointer"
            onClick={() => onGenerateInvoice(subscription)}
          >
            <FileText size={16} />

            <span>Generate Invoice</span>
          </DropdownMenuItem>

          <DropdownMenuItem
            className="cursor-pointer"
            onClick={() =>
              navigate(
                `/subscription-billing/transactions?subscriptionId=${subscription.id}`,
              )
            }
          >
            <CreditCard size={16} />

            <span>View Transactions</span>
          </DropdownMenuItem>
        </DropdownMenuContent>
      </DropdownMenu>
    </>
  );
}

export default SubscriptionRowActions;
