import { useState } from "react";

import { useParams } from "react-router-dom";

import type { Invoice } from "../types/invoice.types";

import MarkAsPaidDialog from "../components/invoices/dialogs/mark-as-paid-dialog";

import SendInvoiceReminderDialog from "../components/invoices/dialogs/send-invoice-reminder-dialog";

import CancelInvoiceDialog from "../components/invoices/dialogs/cancel-invoice-dialog";

import InvoiceHeroSection from "../components/invoice-details/invoice-hero-section";

import InvoiceInformationCard from "../components/invoice-details/invoice-information-card";

import ClientInformationCard from "../components/invoice-details/client-information-card";

import BillingBreakdownCard from "../components/invoice-details/billing-breakdown-card";

import PaymentTimelineCard from "../components/invoice-details/payment-timeline-card";

import InvoiceHealthCard from "../components/invoice-details/invoice-health-card";

import QuickActionsCard from "../components/invoice-details/quick-actions-card";

import ActivityTimelineCard from "../components/invoice-details/activity-timeline-card";

import PaymentInformationCard from "../components/invoice-details/payment-information-card";
import ResendInvoiceDialog from "../components/invoices/dialogs/resend-invoice-dialog";

function InvoiceDetailsPage() {
  const { invoiceId } = useParams();

  console.log(invoiceId);

  const [markPaidOpen, setMarkPaidOpen] = useState(false);
  const [reminderOpen, setReminderOpen] = useState(false);
  const [resendOpen, setResendOpen] = useState(false);
  const [cancelOpen, setCancelOpen] = useState(false);

  const invoice: Invoice = {
    id: "1",
    invoiceNumber: "INV-2026-001",
    client: "Acme Corporation",
    email: "admin@acme.com",
    amount: "৳ 50,000",
    status: "Pending",
    type: "Renewal",
    issueDate: "01 Jun 2026",
    dueDate: "10 Jun 2026",
  };

  return (
    <>
      <div className="space-y-8">
        <InvoiceHeroSection />

        <div className="grid gap-8 xl:grid-cols-[minmax(0,1fr)_380px]">
          <div className="space-y-8">
            <InvoiceInformationCard />

            <ClientInformationCard />

            <BillingBreakdownCard />

            <PaymentInformationCard />

            <PaymentTimelineCard />
          </div>

          <div>
            <div className="sticky top-6 space-y-6">
              <InvoiceHealthCard />

              <QuickActionsCard
                onMarkPaid={() => setMarkPaidOpen(true)}
                onSendReminder={() => setReminderOpen(true)}
                onResendInvoice={() => setResendOpen(true)}
                onCancelInvoice={() => setCancelOpen(true)}
              />

              <ActivityTimelineCard />
            </div>
          </div>
        </div>
      </div>
      <MarkAsPaidDialog
        open={markPaidOpen}
        onOpenChange={setMarkPaidOpen}
        invoice={invoice}
      />

      <SendInvoiceReminderDialog
        open={reminderOpen}
        onOpenChange={setReminderOpen}
        invoice={invoice}
      />

      <ResendInvoiceDialog
        open={resendOpen}
        onOpenChange={setResendOpen}
        invoice={invoice}
      />

      <CancelInvoiceDialog
        open={cancelOpen}
        onOpenChange={setCancelOpen}
        invoice={invoice}
      />
    </>
  );
}

export default InvoiceDetailsPage;
