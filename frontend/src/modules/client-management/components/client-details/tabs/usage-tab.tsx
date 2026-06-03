import ModuleUsageTable from "./usage/module-usage-table";
import PackageLimitsTable from "./usage/package-limits-table";
import ResourceUsageCards from "./usage/resource-usage-cards";
import UsageSummaryCard from "./usage/usage-summary-card";

function UsageTab() {
  return (
    <div className="space-y-8">
      <UsageSummaryCard />

      <ResourceUsageCards />

      <ModuleUsageTable />

      <PackageLimitsTable />
    </div>
  );
}

export default UsageTab;
