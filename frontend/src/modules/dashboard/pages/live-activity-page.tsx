import { Activity, ShieldCheck, Users, Wifi } from "lucide-react";

import ActiveSessions from "../components/widgets/active-sessions";

import LiveEvents from "../components/widgets/live-events";

import SecurityAlerts from "../components/widgets/security-alerts";

import StatCard from "../components/widgets/stat-card";

function LiveActivityPage() {
  return (
    <div className="space-y-6 pb-6">
      {/* KPI */}
      <section className="grid gap-5 md:grid-cols-2 xl:grid-cols-4">
        <StatCard title="Live Sessions" value="1.2K" growth="+8%" icon={Wifi} />

        <StatCard
          title="Operational Events"
          value="428"
          growth="+14%"
          icon={Activity}
        />

        <StatCard
          title="Security Events"
          value="12"
          growth="+2%"
          icon={ShieldCheck}
        />

        <StatCard title="Online Admins" value="84" growth="+6%" icon={Users} />
      </section>

      {/* CONTENT */}
      <section className="grid gap-6 2xl:grid-cols-12">
        <div className="space-y-6 2xl:col-span-8">
          <LiveEvents />
        </div>

        <div className="space-y-6 2xl:col-span-4">
          <SecurityAlerts />

          <ActiveSessions />
        </div>
      </section>
    </div>
  );
}

export default LiveActivityPage;
