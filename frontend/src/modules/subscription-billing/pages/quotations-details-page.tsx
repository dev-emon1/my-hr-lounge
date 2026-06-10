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

function QuotationDetailsPage() {
  const { quotationId } = useParams();
  const navigate = useNavigate();

  const [sendOpen, setSendOpen] = useState(false);
  const [approveOpen, setApproveOpen] = useState(false);
  const [rejectOpen, setRejectOpen] = useState(false);

  const mockQuotation: Quotation = {
    id: "1",

    quotationNumber: "QT-2026-001",

    client: "Acme Corporation",

    contactPerson: "John Smith",

    email: "john.smith@acme.com",

    phone: "+8801712345678",

    packageName: "Enterprise",

    billingCycle: "Yearly",

    amount: "৳ 80,000",

    issueDate: "01 Jun 2026",

    expiryDate: "30 Jun 2026",

    status: "Approved",
  };

  console.log(quotationId);

  return (
    <>
      <div className="space-y-8">
        <QuotationHeroSection />

        <div className="grid gap-8 xl:grid-cols-[minmax(0,1fr)_380px]">
          <div className="space-y-8">
            <QuotationInformationCard />

            <ClientInformationCard />

            <PackageBreakdownCard />

            <PricingBreakdownCard />

            <IncludedModulesCard />
          </div>

          <div>
            <div className="sticky top-6 space-y-6">
              <QuotationHealthCard />

              <QuickActionsCard
                status={mockQuotation.status}
                onSend={() => setSendOpen(true)}
                onApprove={() => setApproveOpen(true)}
                onReject={() => setRejectOpen(true)}
                onStartOnboarding={() =>
                  navigate("/client-management/onboarding", {
                    state: {
                      quotation: mockQuotation,
                    },
                  })
                }
              />

              <ApprovalTimelineCard />
            </div>
          </div>
        </div>
      </div>

      <SendQuotationDialog
        open={sendOpen}
        onOpenChange={setSendOpen}
        quotation={mockQuotation}
      />

      <ApproveQuotationDialog
        open={approveOpen}
        onOpenChange={setApproveOpen}
        quotation={mockQuotation}
      />

      <RejectQuotationDialog
        open={rejectOpen}
        onOpenChange={setRejectOpen}
        quotation={mockQuotation}
      />
    </>
  );
}

export default QuotationDetailsPage;
