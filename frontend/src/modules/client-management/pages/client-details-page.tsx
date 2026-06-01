import { useParams } from "react-router-dom";

import ClientHeroSection from "../components/client-details/client-hero-section";

import ClientHealthCard from "../components/client-details/client-health-card";

import WorkspaceInformationCard from "../components/client-details/workspace-information-card";

import SubscriptionOverviewCard from "../components/client-details/subscription-overview-card";

import WorkspaceOwnerCard from "../components/client-details/workspace-owner-card";

import ActivityTimelineCard from "../components/client-details/activity-timeline-card";

import QuickActionsCard from "../components/client-details/quick-actions-card";

import SecurityScoreCard from "../components/client-details/security-score-card";

import StorageUsageCard from "../components/client-details/storage-usage-card";

function ClientDetailsPage() {
  const { clientId } = useParams();
  console.log(clientId);

  //   const { data } = useGetClientDetailsQuery(clientId);
  return (
    <div className="space-y-8">
      <ClientHeroSection />

      <div className="grid gap-8 xl:grid-cols-[minmax(0,1fr)_380px]">
        {/* LEFT */}
        <div className="space-y-8">
          <WorkspaceInformationCard />

          <SubscriptionOverviewCard />

          <WorkspaceOwnerCard />

          <ActivityTimelineCard />
        </div>

        {/* RIGHT */}
        <div>
          <div className="sticky top-6 space-y-6">
            <ClientHealthCard />

            <SecurityScoreCard />

            <StorageUsageCard />

            <QuickActionsCard />
          </div>
        </div>
      </div>
    </div>
  );
}

export default ClientDetailsPage;
