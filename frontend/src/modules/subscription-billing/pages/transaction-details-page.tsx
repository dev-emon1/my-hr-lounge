import { useState } from "react";

import { useParams } from "react-router-dom";

import TransactionHeroSection from "../components/transaction-details/transaction-hero-section";

import TransactionInformationCard from "../components/transaction-details/transaction-information-card";

import InvoiceInformationCard from "../components/transaction-details/invoice-information-card";

import ClientInformationCard from "../components/transaction-details/client-information-card";

import PaymentDetailsCard from "../components/transaction-details/payment-details-card";

import TransactionHealthCard from "../components/transaction-details/transaction-health-card";

import QuickActionsCard from "../components/transaction-details/quick-actions-card";

import AuditTimelineCard from "../components/transaction-details/audit-timeline-card";

import RefundTransactionDialog from "../components/transactions/dialogs/refund-transaction-dialog";

import MarkFailedDialog from "../components/transactions/dialogs/mark-failed-dialog";

import type { Transaction } from "../types/transaction.types";

function TransactionDetailsPage() {
  const { transactionId } = useParams();

  console.log(transactionId);

  const [refundOpen, setRefundOpen] = useState(false);

  const [failedOpen, setFailedOpen] = useState(false);

  const mockTransaction: Transaction = {
    id: "1",

    transactionId: "TRX-2026-001",

    invoiceNumber: "INV-2026-001",

    client: "Acme Corporation",

    amount: "৳ 50,000",

    paymentMethod: "Bank Transfer",

    transactionDate: "05 Jun 2026",

    status: "Success",

    gateway: "SSLCommerz",
  };

  return (
    <>
      <div className="space-y-8">
        <TransactionHeroSection />

        <div className="grid gap-8 xl:grid-cols-[minmax(0,1fr)_380px]">
          <div className="space-y-8">
            <TransactionInformationCard />

            <InvoiceInformationCard />

            <ClientInformationCard />

            <PaymentDetailsCard />
          </div>

          <div>
            <div className="sticky top-6 space-y-6">
              <TransactionHealthCard />

              <QuickActionsCard
                onRefund={() => setRefundOpen(true)}
                onMarkFailed={() => setFailedOpen(true)}
              />

              <AuditTimelineCard />
            </div>
          </div>
        </div>
      </div>
      <RefundTransactionDialog
        open={refundOpen}
        onOpenChange={setRefundOpen}
        transaction={mockTransaction}
      />

      <MarkFailedDialog
        open={failedOpen}
        onOpenChange={setFailedOpen}
        transaction={mockTransaction}
      />
    </>
  );
}

export default TransactionDetailsPage;
