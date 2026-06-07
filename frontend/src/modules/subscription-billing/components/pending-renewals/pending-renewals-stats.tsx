import { AlertTriangle, Banknote, CalendarClock, Timer } from "lucide-react";

import StatCard from "@/shared/components/stats/stat-card";

import StatCardGrid from "@/shared/components/stats/stat-card-grid";

function PendingRenewalsStats() {
  return (
    <StatCardGrid>
      <StatCard
        title="Due Today"
        value="12"
        description="Require immediate attention"
        icon={<Timer size={28} />}
        variant="warning"
      />

      <StatCard
        title="Due This Week"
        value="43"
        description="Upcoming renewals"
        icon={<CalendarClock size={28} />}
        variant="info"
      />

      <StatCard
        title="Overdue"
        value="8"
        description="Already expired"
        icon={<AlertTriangle size={28} />}
        variant="danger"
      />

      <StatCard
        title="Revenue At Risk"
        value="৳ 24,500"
        description="Potential churn revenue"
        icon={<Banknote size={28} />}
        variant="warning"
      />
    </StatCardGrid>
  );
}

export default PendingRenewalsStats;
