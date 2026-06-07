import SuspendedClientsStats from "../components/suspended-clients/suspended-clients-stats";

import SuspendedClientsToolbar from "../components/suspended-clients/suspended-clients-toolbar";

import SuspendedClientsTable from "../components/suspended-clients/suspended-clients-table";

function SuspendedClientsPage() {
  return (
    <div className="space-y-8">
      <div>
        <h1 className="text-4xl font-black tracking-tight">
          Suspended Clients
        </h1>

        <p className="mt-2 text-muted-foreground">
          Manage suspended workspaces, review suspension reasons, extend
          suspensions and reactivate clients.
        </p>
      </div>

      <SuspendedClientsStats />

      <div className="rounded-[32px] border border-border bg-card/60 p-6 shadow-2xl backdrop-blur-xl lg:p-8">
        <div className="mb-8">
          <h2 className="text-2xl font-black tracking-tight">
            Suspended Client Directory
          </h2>

          <p className="mt-2 text-muted-foreground">
            Review all suspended clients and manage their access.
          </p>
        </div>

        <SuspendedClientsToolbar />

        <div className="mt-8">
          <SuspendedClientsTable />
        </div>
      </div>
    </div>
  );
}

export default SuspendedClientsPage;
