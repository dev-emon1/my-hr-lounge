import { useState } from "react";
import { useNavigate, useParams } from "react-router-dom";

import QuotationHeroSection from "../components/quotation-details/quotation-hero-section";
import QuotationInformationCard from "../components/quotation-details/quotation-information-card";
import ClientInformationCard from "../components/quotation-details/client-information-card";
import PackageBreakdownCard from "../components/quotation-details/package-breakdown-card";
import PricingBreakdownCard from "../components/quotation-details/pricing-breakdown-card";
import IncludedModulesCard from "../components/quotation-details/included-modules-card";
import QuotationHealthCard from "../components/quotation-details/quotation-health-card";
import QuickActionsCard from "../components/quotation-details/quick-actions-card";
import ApprovalTimelineCard from "../components/quotation-details/approval-timeline-card";

import SendQuotationDialog from "../components/quotations/dialogs/send-quotation-dialog";
import ApproveQuotationDialog from "../components/quotations/dialogs/approve-quotation-dialog";
import RejectQuotationDialog from "../components/quotations/dialogs/reject-quotation-dialog";

import type { Quotation } from "../types/quotation.types";
import { mockQuotations } from "../constants/mock-quotations";

function QuotationDetailsPage() {
  const { quotationId } = useParams();
  const navigate = useNavigate();

  const [sendOpen, setSendOpen] = useState(false);
  const [approveOpen, setApproveOpen] = useState(false);
  const [rejectOpen, setRejectOpen] = useState(false);

  const quotation = mockQuotations.find(
    (item) => item.quotationNumber === quotationId,
  );

  if (!quotation) {
    return <div>Quotation Not Found</div>;
  }

  console.log(quotationId);

  return (
    <>
      <div className="space-y-8">
        <QuotationHeroSection quotation={quotation} />

        <div className="grid gap-8 xl:grid-cols-[minmax(0,1fr)_380px]">
          <div className="space-y-8">
            <QuotationInformationCard quotation={quotation} />

            <ClientInformationCard quotation={quotation} />

            <PackageBreakdownCard quotation={quotation} />

            <PricingBreakdownCard quotation={quotation} />

            <IncludedModulesCard quotation={quotation} />
          </div>

          <div>
            <div className="sticky top-6 space-y-6">
              <QuotationHealthCard quotation={quotation} />

              <QuickActionsCard
                status={quotation.status}
                onSend={() => setSendOpen(true)}
                onApprove={() => setApproveOpen(true)}
                onReject={() => setRejectOpen(true)}
                onStartOnboarding={() =>
                  navigate("/client-management/onboarding", {
                    state: {
                      quotation: quotation,
                    },
                  })
                }
              />

              <ApprovalTimelineCard quotation={quotation} />
            </div>
          </div>
        </div>
      </div>

      <SendQuotationDialog
        open={sendOpen}
        onOpenChange={setSendOpen}
        quotation={quotation}
      />

      <ApproveQuotationDialog
        open={approveOpen}
        onOpenChange={setApproveOpen}
        quotation={quotation}
      />

      <RejectQuotationDialog
        open={rejectOpen}
        onOpenChange={setRejectOpen}
        quotation={quotation}
      />
    </>
  );
}

export default QuotationDetailsPage;
