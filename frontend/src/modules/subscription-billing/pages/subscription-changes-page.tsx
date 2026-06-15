import { useState } from "react";

import { mockSubscriptionChanges } from "../constants/mock-subscription-changes";

import type { SubscriptionChange } from "../types/subscription-change.types";

import SubscriptionChangesStats from "../components/subscription-changes/subscription-changes-stats";
import SubscriptionChangesToolbar from "../components/subscription-changes/subscription-changes-toolbar";
import SubscriptionChangesTable from "../components/subscription-changes/subscription-changes-table";

import ApproveChangeDialog from "../components/subscription-changes/dialogs/approve-change-dialog";
import RejectChangeDialog from "../components/subscription-changes/dialogs/reject-change-dialog";
import CompleteChangeDialog from "../components/subscription-changes/dialogs/complete-change-dialog";

function SubscriptionChangesPage() {
  const [selectedChange, setSelectedChange] =
    useState<SubscriptionChange | null>(null);

  const [approveOpen, setApproveOpen] = useState(false);

  const [rejectOpen, setRejectOpen] = useState(false);

  const [completeOpen, setCompleteOpen] = useState(false);

  return (
    <>
      <div className="space-y-8">
        <div>
          <h1 className="text-4xl font-black tracking-tight">
            Subscription Changes
          </h1>

          <p className="mt-2 text-muted-foreground">
            Manage upgrades, downgrades, renewals and addon requests.
          </p>
        </div>

        <SubscriptionChangesStats changes={mockSubscriptionChanges} />

        <div className="rounded-[32px] border border-border bg-card/60 p-6 shadow-2xl backdrop-blur-xl lg:p-8">
          <div className="mb-8">
            <h2 className="text-2xl font-black tracking-tight">
              Change Requests
            </h2>

            <p className="mt-2 text-muted-foreground">
              Review and manage subscription change requests.
            </p>
          </div>

          <SubscriptionChangesToolbar />

          <div className="mt-8">
            <SubscriptionChangesTable
              changes={mockSubscriptionChanges}
              onApprove={(change) => {
                setSelectedChange(change);

                setApproveOpen(true);
              }}
              onReject={(change) => {
                setSelectedChange(change);

                setRejectOpen(true);
              }}
              onComplete={(change) => {
                setSelectedChange(change);

                setCompleteOpen(true);
              }}
            />
          </div>
        </div>
      </div>

      <ApproveChangeDialog
        open={approveOpen}
        onOpenChange={setApproveOpen}
        change={selectedChange}
      />

      <RejectChangeDialog
        open={rejectOpen}
        onOpenChange={setRejectOpen}
        change={selectedChange}
      />

      <CompleteChangeDialog
        open={completeOpen}
        onOpenChange={setCompleteOpen}
        change={selectedChange}
      />
    </>
  );
}

export default SubscriptionChangesPage;
