import { Activity, BarChart3, Layers3, Users } from "lucide-react";

import FeatureAdoption from "../components/widgets/feature-adoption";

import ModuleUsage from "../components/widgets/module-usage";

import StatCard from "../components/widgets/stat-card";

import TopFeatures from "../components/widgets/top-features";

import UsageLoad from "../components/widgets/usage-load";

function UsageSnapshotPage() {
  return (
    <div className="space-y-6 pb-6">
      {/* KPI */}
      <section className="grid gap-5 md:grid-cols-2 xl:grid-cols-4">
        <StatCard
          title="Daily Active Users"
          value="4.2K"
          growth="+12%"
          icon={Users}
        />

        <StatCard
          title="Module Engagement"
          value="82%"
          growth="+6%"
          icon={Layers3}
        />

        <StatCard
          title="Usage Growth"
          value="+18%"
          growth="+4%"
          icon={BarChart3}
        />

        <StatCard
          title="System Activity"
          value="98%"
          growth="+2%"
          icon={Activity}
        />
      </section>

      {/* ANALYTICS */}
      <section className="grid gap-6 2xl:grid-cols-12">
        <div className="space-y-6 2xl:col-span-8">
          <ModuleUsage />

          <FeatureAdoption />
        </div>

        <div className="space-y-6 2xl:col-span-4">
          <UsageLoad />

          <TopFeatures />
        </div>
      </section>
    </div>
  );
}

export default UsageSnapshotPage;
