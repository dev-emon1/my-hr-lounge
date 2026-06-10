import { useState } from "react";
import { useNavigate } from "react-router-dom";

import type { Quotation } from "../types/quotation.types";

import SendQuotationDialog from "../components/quotations/dialogs/send-quotation-dialog";
import ApproveQuotationDialog from "../components/quotations/dialogs/approve-quotation-dialog";
import RejectQuotationDialog from "../components/quotations/dialogs/reject-quotation-dialog";

import QuotationsStats from "../components/quotations/quotations-stats";
import QuotationsToolbar from "../components/quotations/quotations-toolbar";
import QuotationsTable from "../components/quotations/quotations-table";

function QuotationsPage() {
  const navigate = useNavigate();

  const [selectedQuotation, setSelectedQuotation] = useState<Quotation | null>(
    null,
  );
  const [sendOpen, setSendOpen] = useState(false);
  const [approveOpen, setApproveOpen] = useState(false);
  const [rejectOpen, setRejectOpen] = useState(false);

  const quotations: Quotation[] = [
    {
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
    },

    {
      id: "2",

      quotationNumber: "QT-2026-002",

      client: "NextGen Solutions",

      contactPerson: "Sarah Ahmed",

      email: "sarah@nextgen.com",

      phone: "+8801812345678",

      packageName: "Growth",

      billingCycle: "Monthly",

      amount: "৳ 40,000",

      issueDate: "05 Jun 2026",

      expiryDate: "05 Jul 2026",

      status: "Sent",
    },
  ];
  return (
    <>
      <div className="space-y-8">
        <div>
          <h1 className="text-4xl font-black tracking-tight">Quotations</h1>

          <p className="mt-2 text-muted-foreground">
            Create, manage and track quotation approvals before invoice
            generation.
          </p>
        </div>

        <QuotationsStats />

        <div className="rounded-[32px] border border-border bg-card/60 p-6 shadow-2xl backdrop-blur-xl lg:p-8">
          <div className="mb-8">
            <h2 className="text-2xl font-black tracking-tight">
              Quotation Directory
            </h2>

            <p className="mt-2 text-muted-foreground">
              Manage quotation lifecycle and client approvals.
            </p>
          </div>

          <QuotationsToolbar />

          <div className="mt-8">
            <QuotationsTable
              quotations={quotations}
              onSend={(quotation) => {
                setSelectedQuotation(quotation);

                setSendOpen(true);
              }}
              onApprove={(quotation) => {
                setSelectedQuotation(quotation);

                setApproveOpen(true);
              }}
              onReject={(quotation) => {
                setSelectedQuotation(quotation);

                setRejectOpen(true);
              }}
              onStartOnboarding={(quotation) => {
                navigate(`/client-management/onboarding`, {
                  state: {
                    quotation,
                  },
                });
              }}
            />
          </div>
        </div>
      </div>

      <SendQuotationDialog
        open={sendOpen}
        onOpenChange={setSendOpen}
        quotation={selectedQuotation}
      />

      <ApproveQuotationDialog
        open={approveOpen}
        onOpenChange={setApproveOpen}
        quotation={selectedQuotation}
      />

      <RejectQuotationDialog
        open={rejectOpen}
        onOpenChange={setRejectOpen}
        quotation={selectedQuotation}
      />
    </>
  );
}

export default QuotationsPage;
