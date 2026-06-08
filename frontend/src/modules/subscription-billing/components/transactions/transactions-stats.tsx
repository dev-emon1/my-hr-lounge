import {
  Banknote,
  CheckCircle2,
  AlertTriangle,
  ArrowLeftRight,
} from "lucide-react";

import StatCard from "@/shared/components/stats/stat-card";
import StatCardGrid from "@/shared/components/stats/stat-card-grid";

function TransactionsStats() {
  return (
    <StatCardGrid>
      <StatCard
        title="Total Transactions"
        value="1,248"
        description="All processed payments"
        icon={<ArrowLeftRight size={28} />}
        variant="info"
      />

      <StatCard
        title="Successful Payments"
        value="1,173"
        description="Completed transactions"
        icon={<CheckCircle2 size={28} />}
        variant="success"
      />

      <StatCard
        title="Failed Payments"
        value="75"
        description="Require investigation"
        icon={<AlertTriangle size={28} />}
        variant="danger"
      />

      <StatCard
        title="Collected Revenue"
        value="৳ 28,45,000"
        description="Total processed revenue"
        icon={<Banknote size={28} />}
        variant="success"
      />
    </StatCardGrid>
  );
}

export default TransactionsStats;
