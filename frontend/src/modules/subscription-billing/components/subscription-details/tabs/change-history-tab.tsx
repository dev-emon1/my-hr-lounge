import ChangeHistorySummaryCards from "../change-history/change-history-summary-cards";

import SubscriptionChangeTimeline from "../change-history/subscription-change-timeline";

import SubscriptionChangeTable from "../change-history/subscription-change-table";

function ChangeHistoryTab() {
  return (
    <div className="space-y-8">
      <ChangeHistorySummaryCards />

      <SubscriptionChangeTimeline />

      <SubscriptionChangeTable />
    </div>
  );
}

export default ChangeHistoryTab;
