import { FileText, Send, CheckCircle2, XCircle } from "lucide-react";

import StatCard from "@/shared/components/stats/stat-card";
import StatCardGrid from "@/shared/components/stats/stat-card-grid";

function QuotationsStats() {
  return (
    <StatCardGrid>
      <StatCard
        title="Total Quotations"
        value="148"
        description="All quotations"
        icon={<FileText size={28} />}
        variant="info"
      />

      <StatCard
        title="Sent"
        value="52"
        description="Waiting for response"
        icon={<Send size={28} />}
        variant="warning"
      />

      <StatCard
        title="Approved"
        value="67"
        description="Ready for onboarding"
        icon={<CheckCircle2 size={28} />}
        variant="success"
      />

      <StatCard
        title="Rejected"
        value="29"
        description="Not converted"
        icon={<XCircle size={28} />}
        variant="danger"
      />
    </StatCardGrid>
  );
}

export default QuotationsStats;
