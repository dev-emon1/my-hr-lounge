import SubscriptionInformationCard from "../overview/subscription-information-card";

import RevenueSummaryOverviewCard from "../overview/revenue-summary-overview-card";

import UsageSnapshotCard from "../overview/usage-snapshot-card";

import SubscriptionTimelineCard from "../overview/subscription-timeline-card";

function OverviewTab() {
  return (
    <div className="space-y-8">
      <SubscriptionInformationCard />

      <RevenueSummaryOverviewCard />

      <UsageSnapshotCard />

      <SubscriptionTimelineCard />
    </div>
  );
}

export default OverviewTab;
