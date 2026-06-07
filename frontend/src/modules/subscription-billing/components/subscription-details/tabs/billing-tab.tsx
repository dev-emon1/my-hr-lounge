import BillingProfileCard from "../billing/billing-profile-card";

import PaymentSummaryCard from "../billing/payment-summary-card";

import RenewalInformationCard from "../billing/renewal-information-card";

import OutstandingBalanceCard from "../billing/outstanding-balance-card";

function BillingTab() {
  return (
    <div className="space-y-8">
      <BillingProfileCard />

      <PaymentSummaryCard />

      <RenewalInformationCard />

      <OutstandingBalanceCard />
    </div>
  );
}

export default BillingTab;
