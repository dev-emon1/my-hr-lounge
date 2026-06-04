import PendingRenewalsStats from "../components/pending-renewals/pending-renewals-stats";

import PendingRenewalsToolbar from "../components/pending-renewals/pending-renewals-toolbar";

import PendingRenewalsTable from "../components/pending-renewals/pending-renewals-table";

function PendingRenewalsPage() {
  return (
    <div className="space-y-8">
      <div>
        <h1 className="text-4xl font-black tracking-tight">Pending Renewals</h1>

        <p className="mt-2 text-muted-foreground">
          Monitor upcoming renewals, overdue subscriptions and revenue at risk.
        </p>
      </div>

      <PendingRenewalsStats />

      <div className="rounded-[32px] border border-border bg-card/60 p-6 shadow-2xl backdrop-blur-xl lg:p-8">
        <div className="mb-8">
          <h2 className="text-2xl font-black tracking-tight">
            Renewal Pipeline
          </h2>

          <p className="mt-2 text-muted-foreground">
            Track renewal activities and take action before subscriptions
            expire.
          </p>
        </div>

        <PendingRenewalsToolbar />

        <div className="mt-8">
          <PendingRenewalsTable />
        </div>
      </div>
    </div>
  );
}

export default PendingRenewalsPage;
