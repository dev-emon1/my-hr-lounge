import { useState } from "react";
import { useParams } from "react-router-dom";

import { mockSubscriptionChanges } from "../constants/mock-subscription-changes";

import SubscriptionChangeHeroSection from "../components/subscription-change-details/subscription-change-hero-section";
import ChangeInformationCard from "../components/subscription-change-details/change-information-card";
import ChangeReasonCard from "../components/subscription-change-details/change-reason-card";
import ChangeHealthCard from "../components/subscription-change-details/change-health-card";
import ChangeTimelineCard from "../components/subscription-change-details/change-timeline-card";
import QuickActionsCard from "../components/subscription-change-details/quick-actions-card";

import ApproveChangeDialog from "../components/subscription-changes/dialogs/approve-change-dialog";
import RejectChangeDialog from "../components/subscription-changes/dialogs/reject-change-dialog";
import CompleteChangeDialog from "../components/subscription-changes/dialogs/complete-change-dialog";

function SubscriptionChangeDetailsPage() {
  const [approveOpen, setApproveOpen] = useState(false);
  const [rejectOpen, setRejectOpen] = useState(false);
  const [completeOpen, setCompleteOpen] = useState(false);

  const { changeId } = useParams();

  const change = mockSubscriptionChanges.find(
    (item) => item.requestNumber === changeId,
  );

  if (!change) {
    return (
      <div className="rounded-[28px] border border-border p-8">
        Subscription Change Request Not Found
      </div>
    );
  }

  return (
    <>
      <div className="space-y-8">
        <SubscriptionChangeHeroSection change={change} />

        <div className="grid gap-8 xl:grid-cols-[minmax(0,1fr)_380px]">
          <div className="space-y-8">
            <ChangeInformationCard change={change} />

            <ChangeReasonCard change={change} />
          </div>

          <div>
            <div className="sticky top-6 space-y-6">
              <ChangeHealthCard change={change} />

              <QuickActionsCard
                change={change}
                onApprove={() => setApproveOpen(true)}
                onReject={() => setRejectOpen(true)}
                onComplete={() => setCompleteOpen(true)}
              />

              <ChangeTimelineCard change={change} />
            </div>
          </div>
        </div>
      </div>

      <ApproveChangeDialog
        open={approveOpen}
        onOpenChange={setApproveOpen}
        change={change}
      />

      <RejectChangeDialog
        open={rejectOpen}
        onOpenChange={setRejectOpen}
        change={change}
      />

      <CompleteChangeDialog
        open={completeOpen}
        onOpenChange={setCompleteOpen}
        change={change}
      />
    </>
  );
}

export default SubscriptionChangeDetailsPage;
