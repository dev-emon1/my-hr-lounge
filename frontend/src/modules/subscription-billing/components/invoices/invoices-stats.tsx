import { FilePenLine, AlertCircle, CheckCircle2, Banknote } from "lucide-react";

import StatCard from "@/shared/components/stats/stat-card";
import StatCardGrid from "@/shared/components/stats/stat-card-grid";

function InvoicesStats() {
  return (
    <StatCardGrid>
      <StatCard
        title="Draft Invoices"
        value="18"
        description="Awaiting review"
        icon={<FilePenLine size={28} />}
        variant="warning"
      />

      <StatCard
        title="Unpaid Invoices"
        value="43"
        description="Pending collection"
        icon={<AlertCircle size={28} />}
        variant="danger"
      />

      <StatCard
        title="Paid This Month"
        value="126"
        description="Successfully collected"
        icon={<CheckCircle2 size={28} />}
        variant="success"
      />

      <StatCard
        title="Outstanding Amount"
        value="৳ 4,85,000"
        description="Awaiting payment"
        icon={<Banknote size={28} />}
        variant="warning"
      />
    </StatCardGrid>
  );
}

export default InvoicesStats;
