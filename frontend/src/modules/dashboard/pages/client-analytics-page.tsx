import { Building2, TrendingUp, Users, UserCheck } from "lucide-react";

import ClientGrowth from "../components/widgets/client-growth";

import ClientHealth from "../components/widgets/client-health";

import ClientSegments from "../components/widgets/client-segments";

import StatCard from "../components/widgets/stat-card";

function ClientAnalyticsPage() {
  return (
    <div className="space-y-6 pb-6">
      {/* KPI */}
      <section className="grid gap-5 md:grid-cols-2 xl:grid-cols-4">
        <StatCard
          title="New Onboardings"
          value="28"
          growth="+18%"
          icon={Building2}
        />

        <StatCard
          title="Retention Rate"
          value="94%"
          growth="+3%"
          icon={UserCheck}
        />

        <StatCard
          title="Engagement Score"
          value="88%"
          growth="+6%"
          icon={Users}
        />

        <StatCard
          title="Module Adoption"
          value="72%"
          growth="+9%"
          icon={TrendingUp}
        />
      </section>

      {/* ANALYTICS */}
      <section className="grid gap-6 2xl:grid-cols-12">
        <div className="space-y-6 2xl:col-span-8">
          <ClientGrowth />
        </div>

        <div className="space-y-6 2xl:col-span-4">
          <ClientHealth />

          <ClientSegments />
        </div>
      </section>
    </div>
  );
}

export default ClientAnalyticsPage;
