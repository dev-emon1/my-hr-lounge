import { useParams } from "react-router-dom";

import SubscriptionHeroSection from "../components/subscription-details/subscription-hero-section";

import SubscriptionDetailsTabs from "../components/subscription-details/tabs/subscription-details-tabs";

import SubscriptionHealthCard from "../components/subscription-details/subscription-health-card";

import RevenueSummaryCard from "../components/subscription-details/revenue-summary-card";

import SubscriptionQuickActionsCard from "../components/subscription-details/subscription-quick-actions-card";

function SubscriptionDetailsPage() {
  const { subscriptionId } = useParams();

  console.log(subscriptionId);

  const subscription = {
    id: "1",
    client: "Acme Corporation",
    packageName: "Enterprise",
    billingCycle: "Yearly",
    startDate: "12 May 2026",
    expiryDate: "12 May 2027",
    revenue: "$4,999",
    status: "Active",
  };

  return (
    <div className="space-y-8">
      <SubscriptionHeroSection />

      <div className="grid gap-8 xl:grid-cols-[minmax(0,1fr)_380px]">
        {/* LEFT */}

        <div>
          <SubscriptionDetailsTabs />
        </div>

        {/* RIGHT */}

        <div>
          <div className="sticky top-6 space-y-6">
            <SubscriptionHealthCard />

            <RevenueSummaryCard />

            <SubscriptionQuickActionsCard subscription={subscription} />
          </div>
        </div>
      </div>
    </div>
  );
}

export default SubscriptionDetailsPage;
