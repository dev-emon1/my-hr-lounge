import { Building2, CreditCard, Users, Wallet } from "lucide-react";

import RecentActivity from "../components/widgets/recent-activity";

import RevenueChart from "../components/charts/revenue-chart";

import StatsCard from "../components/widgets/stats-card";

function DashboardPage() {
  return (
    <div className="space-y-8">
      {/* HEADER */}
      <div>
        <h1 className="text-4xl font-black tracking-tight">
          Super Admin Dashboard
        </h1>

        <p className="mt-2 text-muted-foreground">
          Platform overview and analytics
        </p>
      </div>

      {/* STATS */}
      <div className="grid gap-6 md:grid-cols-2 xl:grid-cols-4">
        <StatsCard
          title="Companies"
          value="248"
          description="Active tenant companies"
          icon={Building2}
          trend="+12%"
        />

        <StatsCard
          title="Employees"
          value="12,480"
          description="Total active employees"
          icon={Users}
          trend="+18%"
        />

        <StatsCard
          title="Revenue"
          value="$48K"
          description="Monthly recurring revenue"
          icon={Wallet}
          trend="+24%"
        />

        <StatsCard
          title="Subscriptions"
          value="186"
          description="Premium active subscriptions"
          icon={CreditCard}
          trend="+8%"
        />
      </div>

      {/* ANALYTICS */}
      <div className="grid gap-6 xl:grid-cols-3">
        <div className="xl:col-span-2">
          <RevenueChart />
        </div>

        <RecentActivity />
      </div>
    </div>
  );
}

export default DashboardPage;
