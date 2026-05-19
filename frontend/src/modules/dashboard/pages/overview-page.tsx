import RevenueChart from "../components/charts/revenue-chart";

import SubscriptionChart from "../components/charts/subscription-chart";

import ActivityFeed from "../components/widgets/activity-feed";

import AIInsights from "../components/widgets/ai-insights";

import QuickActions from "../components/widgets/quick-actions";

import RecentClients from "../components/widgets/recent-clients";

import StatsGrid from "../components/widgets/stats-grid";

import SystemStatus from "../components/widgets/system-status";

function OverviewPage() {
  return (
    <div className="space-y-6 pb-6">
      {/* KPI */}
      <StatsGrid />

      {/* ANALYTICS */}
      <section className="grid gap-6 2xl:grid-cols-12">
        <div className="2xl:col-span-8">
          <RevenueChart />
        </div>

        <div className="2xl:col-span-4">
          <SubscriptionChart />
        </div>
      </section>

      {/* OPERATIONS */}
      <section className="grid gap-6 2xl:grid-cols-12">
        {/* LEFT */}
        <div className="space-y-6 2xl:col-span-8">
          <RecentClients />

          <ActivityFeed />
        </div>

        {/* RIGHT */}
        <div className="space-y-6 2xl:col-span-4">
          <SystemStatus />

          <QuickActions />

          <AIInsights />
        </div>
      </section>
    </div>
  );
}

export default OverviewPage;
