import {
  Activity,
  Building2,
  DollarSign,
  ShieldCheck,
  Users,
  Wallet,
} from "lucide-react";

import StatCard from "./stat-card";

function StatsGrid() {
  return (
    <div className="grid gap-5 md:grid-cols-2 xl:grid-cols-3 2xl:grid-cols-6">
      <StatCard
        title="Total Clients"
        value="248"
        growth="+12%"
        icon={Building2}
      />

      <StatCard
        title="Monthly Revenue"
        value="$48.2K"
        growth="+18%"
        icon={DollarSign}
      />

      <StatCard
        title="Active Subscriptions"
        value="192"
        growth="+9%"
        icon={Wallet}
      />

      <StatCard
        title="Employees Managed"
        value="18.4K"
        growth="+22%"
        icon={Users}
      />

      <StatCard
        title="Platform Health"
        value="99.99%"
        growth="+0.2%"
        icon={ShieldCheck}
      />

      <StatCard
        title="Active Sessions"
        value="1.2K"
        growth="+4%"
        icon={Activity}
      />
    </div>
  );
}

export default StatsGrid;
