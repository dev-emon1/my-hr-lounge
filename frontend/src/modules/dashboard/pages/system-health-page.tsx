import { Activity, Database, Server, ShieldCheck } from "lucide-react";

import IncidentReports from "../components/widgets/incident-reports";

import PerformanceMetrics from "../components/widgets/performance-metrics";

import ServerStatus from "../components/widgets/server-status";

import ServiceUptime from "../components/widgets/service-uptime";

import StatCard from "../components/widgets/stat-card";

function SystemHealthPage() {
  return (
    <div className="space-y-6 pb-6">
      {/* KPI */}
      <section className="grid gap-5 md:grid-cols-2 xl:grid-cols-4">
        <StatCard
          title="Infrastructure Health"
          value="99.99%"
          growth="+0.2%"
          icon={Server}
        />

        <StatCard
          title="Database Performance"
          value="97%"
          growth="+3%"
          icon={Database}
        />

        <StatCard
          title="Security Status"
          value="Protected"
          growth="+1%"
          icon={ShieldCheck}
        />

        <StatCard
          title="Operational Load"
          value="42%"
          growth="+4%"
          icon={Activity}
        />
      </section>

      {/* CONTENT */}
      <section className="grid gap-6 2xl:grid-cols-12">
        <div className="space-y-6 2xl:col-span-8">
          <ServerStatus />

          <IncidentReports />
        </div>

        <div className="space-y-6 2xl:col-span-4">
          <PerformanceMetrics />

          <ServiceUptime />
        </div>
      </section>
    </div>
  );
}

export default SystemHealthPage;
