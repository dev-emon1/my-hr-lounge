import { Building2, CreditCard, Users, Wallet } from "lucide-react";

import StatsCard from "../widgets/stats-card";

function KPIGrid() {
  return (
    <div className="grid gap-6 md:grid-cols-2 2xl:grid-cols-4">
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
  );
}

export default KPIGrid;
