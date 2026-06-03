import { useParams } from "react-router-dom";

import ClientHeroSection from "../components/client-details/client-hero-section";

import ClientHealthCard from "../components/client-details/client-health-card";

import SecurityScoreCard from "../components/client-details/security-score-card";

import QuickActionsCard from "../components/client-details/quick-actions-card";

import ClientDetailsTabs from "../components/client-details/tabs/client-details-tabs";

function ClientDetailsPage() {
  const { clientId } = useParams();

  console.log(clientId);

  return (
    <div className="space-y-8">
      <ClientHeroSection />

      <div className="grid gap-8 xl:grid-cols-[minmax(0,1fr)_380px]">
        {/* LEFT */}

        <div>
          <ClientDetailsTabs />
        </div>

        {/* RIGHT */}

        <div>
          <div className="sticky top-6 space-y-6">
            <ClientHealthCard />

            <SecurityScoreCard />

            <QuickActionsCard />
          </div>
        </div>
      </div>
    </div>
  );
}

export default ClientDetailsPage;
