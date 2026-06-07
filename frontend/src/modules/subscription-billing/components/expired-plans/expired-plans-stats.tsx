import { AlertTriangle, Ban, CalendarX, Banknote } from "lucide-react";

import StatCard from "@/shared/components/stats/stat-card";

import StatCardGrid from "@/shared/components/stats/stat-card-grid";

function ExpiredPlansStats() {
  return (
    <StatCardGrid>
      <StatCard
        title="Expired Today"
        value="7"
        description="Expired in last 24 hours"
        icon={<CalendarX size={28} />}
        variant="danger"
      />

      <StatCard
        title="Expired This Month"
        value="48"
        description="Require recovery action"
        icon={<AlertTriangle size={28} />}
        variant="warning"
      />

      <StatCard
        title="Lost Revenue"
        value="৳ 2,45,000"
        description="Potential revenue loss"
        icon={<Banknote size={28} />}
        variant="danger"
      />

      <StatCard
        title="Suspended Workspaces"
        value="21"
        description="Access restricted"
        icon={<Ban size={28} />}
        variant="danger"
      />
    </StatCardGrid>
  );
}

export default ExpiredPlansStats;
