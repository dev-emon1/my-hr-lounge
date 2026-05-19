import { DollarSign, TrendingUp, Wallet } from "lucide-react";

import RevenueChart from "../components/charts/revenue-chart";

import PaymentInsights from "../components/widgets/payment-insights";

import RenewalOverview from "../components/widgets/renewal-overview";

import RevenueBreakdown from "../components/widgets/revenue-breakdown";

import StatCard from "../components/widgets/stat-card";

function RevenueOverviewPage() {
  return (
    <div className="space-y-6 pb-6">
      {/* KPI */}
      <section className="grid gap-5 md:grid-cols-2 xl:grid-cols-4">
        <StatCard
          title="Monthly Revenue"
          value="$48.2K"
          growth="+18%"
          icon={DollarSign}
        />

        <StatCard
          title="Annual Revenue"
          value="$582K"
          growth="+22%"
          icon={Wallet}
        />

        <StatCard
          title="MRR Growth"
          value="+12.4%"
          growth="+4%"
          icon={TrendingUp}
        />

        <StatCard
          title="Renewal Rate"
          value="94%"
          growth="+2%"
          icon={TrendingUp}
        />
      </section>

      {/* ANALYTICS */}
      <section className="grid gap-6 2xl:grid-cols-12">
        <div className="space-y-6 2xl:col-span-8">
          <RevenueChart />

          <RevenueBreakdown />
        </div>

        <div className="space-y-6 2xl:col-span-4">
          <PaymentInsights />

          <RenewalOverview />
        </div>
      </section>
    </div>
  );
}

export default RevenueOverviewPage;
