import { useParams } from "react-router-dom";

import TransactionHeroSection from "../components/transaction-details/transaction-hero-section";

import TransactionInformationCard from "../components/transaction-details/transaction-information-card";

import InvoiceInformationCard from "../components/transaction-details/invoice-information-card";

import ClientInformationCard from "../components/transaction-details/client-information-card";

import PaymentDetailsCard from "../components/transaction-details/payment-details-card";

import TransactionHealthCard from "../components/transaction-details/transaction-health-card";

import QuickActionsCard from "../components/transaction-details/quick-actions-card";

import AuditTimelineCard from "../components/transaction-details/audit-timeline-card";

function TransactionDetailsPage() {
  const { transactionId } = useParams();

  console.log(transactionId);

  return (
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

            <QuickActionsCard />

            <AuditTimelineCard />
          </div>
        </div>
      </div>
    </div>
  );
}

export default TransactionDetailsPage;
