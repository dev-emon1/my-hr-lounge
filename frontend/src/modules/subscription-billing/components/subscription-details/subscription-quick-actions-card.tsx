import { useState } from "react";
import { useNavigate } from "react-router-dom";

import {
  ArrowRightLeft,
  Download,
  FileText,
  PauseCircle,
  RefreshCw,
  TrendingUp,
} from "lucide-react";

import { Button } from "@/shared/ui/button";

import RenewSubscriptionModal from "./dialogs/renew-subscription-modal";
import UpgradePackageModal from "./dialogs/upgrade-package-modal";
import GenerateInvoiceModal from "./dialogs/generate-invoice-modal";

import type { Subscription } from "../../types/subscription.types";
import SuspendSubscriptionDialog from "./dialogs/suspend-subscription-dialog";

type Props = {
  subscription: Subscription;
};

function SubscriptionQuickActionsCard({ subscription }: Props) {
  const navigate = useNavigate();

  const [renewOpen, setRenewOpen] = useState(false);

  const [upgradeOpen, setUpgradeOpen] = useState(false);

  const [invoiceOpen, setInvoiceOpen] = useState(false);

  const [suspendOpen, setSuspendOpen] = useState(false);

  return (
    <>
      <div className="rounded-[28px] border border-border bg-card p-6 shadow-lg">
        <h3 className="text-xl font-black">Subscription Operations</h3>

        <p className="mt-2 text-sm text-muted-foreground">
          Manage subscription lifecycle, billing and renewal operations.
        </p>

        <div className="mt-6 space-y-3">
          <Button
            variant="outline"
            className="w-full justify-start"
            onClick={() => setRenewOpen(true)}
          >
            <RefreshCw size={16} />
            Renew Subscription
          </Button>

          <Button
            variant="outline"
            className="w-full justify-start"
            onClick={() => setUpgradeOpen(true)}
          >
            <TrendingUp size={16} />
            Upgrade Package
          </Button>

          <Button
            variant="outline"
            className="w-full justify-start"
            onClick={() => setInvoiceOpen(true)}
          >
            <FileText size={16} />
            Generate Invoice
          </Button>

          <Button
            variant="outline"
            className="w-full justify-start"
            onClick={() =>
              navigate(
                `/subscription-billing/transactions?subscriptionId=${subscription.id}`,
              )
            }
          >
            <ArrowRightLeft size={16} />
            View Transactions
          </Button>

          <Button
            variant="outline"
            className="w-full justify-start"
            onClick={() =>
              navigate(
                `/subscription-billing/subscription-changes?subscriptionId=${subscription.id}`,
              )
            }
          >
            <ArrowRightLeft size={16} />
            Change History
          </Button>

          <Button variant="outline" className="w-full justify-start" disabled>
            <Download size={16} />
            Download Agreement
          </Button>

          <Button
            variant="destructive"
            className="w-full justify-start"
            onClick={() => setSuspendOpen(true)}
          >
            <PauseCircle size={16} />
            Suspend Subscription
          </Button>
        </div>
      </div>

      <RenewSubscriptionModal
        open={renewOpen}
        onOpenChange={setRenewOpen}
        subscription={subscription}
      />

      <UpgradePackageModal
        open={upgradeOpen}
        onOpenChange={setUpgradeOpen}
        subscription={subscription}
      />

      <GenerateInvoiceModal
        open={invoiceOpen}
        onOpenChange={setInvoiceOpen}
        subscription={subscription}
      />

      <SuspendSubscriptionDialog
        open={suspendOpen}
        onOpenChange={setSuspendOpen}
        subscription={subscription}
      />
    </>
  );
}

export default SubscriptionQuickActionsCard;
