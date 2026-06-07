import { AlertTriangle, CalendarClock, DollarSign, Timer } from "lucide-react";

import StatCard from "@/shared/components/stats/stat-card";

import StatCardGrid from "@/shared/components/stats/stat-card-grid";

function PendingRenewalsStats() {
  return (
    <StatCardGrid>
      <StatCard
        title="Due Today"
        value="12"
        description="Require immediate attention"
        icon={<Timer size={22} />}
      />

      <StatCard
        title="Due This Week"
        value="43"
        description="Upcoming renewals"
        icon={<CalendarClock size={22} />}
      />

      <StatCard
        title="Overdue"
        value="8"
        description="Already expired"
        icon={<AlertTriangle size={22} />}
      />

      <StatCard
        title="Revenue At Risk"
        value="$24,500"
        description="Potential churn revenue"
        icon={<DollarSign size={22} />}
      />
    </StatCardGrid>
  );
}

export default PendingRenewalsStats;
