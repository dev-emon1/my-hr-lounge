import { useParams } from "react-router-dom";

import InvoiceHeroSection from "../components/invoice-details/invoice-hero-section";

import InvoiceInformationCard from "../components/invoice-details/invoice-information-card";

import ClientInformationCard from "../components/invoice-details/client-information-card";

import BillingBreakdownCard from "../components/invoice-details/billing-breakdown-card";

import PaymentTimelineCard from "../components/invoice-details/payment-timeline-card";

import InvoiceHealthCard from "../components/invoice-details/invoice-health-card";

import QuickActionsCard from "../components/invoice-details/quick-actions-card";

import ActivityTimelineCard from "../components/invoice-details/activity-timeline-card";

import PaymentInformationCard from "../components/invoice-details/payment-information-card";

function InvoiceDetailsPage() {
  const { invoiceId } = useParams();

  console.log(invoiceId);

  return (
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

            <QuickActionsCard />

            <ActivityTimelineCard />
          </div>
        </div>
      </div>
    </div>
  );
}

export default InvoiceDetailsPage;
