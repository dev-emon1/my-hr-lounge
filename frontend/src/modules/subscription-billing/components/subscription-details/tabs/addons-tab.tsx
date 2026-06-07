import AddonSummaryCards from "../addons/addon-summary-cards";

import ActiveAddonsTable from "../addons/active-addons-table";

import AvailableAddonsTable from "../addons/available-addons-table";

import AddonPurchaseHistoryTable from "../addons/addon-purchase-history-table";

function AddonsTab() {
  return (
    <div className="space-y-8">
      <AddonSummaryCards />

      <ActiveAddonsTable />

      <AvailableAddonsTable />

      <AddonPurchaseHistoryTable />
    </div>
  );
}

export default AddonsTab;
