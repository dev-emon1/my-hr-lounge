import ArchivedClientsStats from "../components/archived-clients/archived-clients-stats";

import ArchivedClientsToolbar from "../components/archived-clients/archived-clients-toolbar";

import ArchivedClientsTable from "../components/archived-clients/archived-clients-table";

function ArchivedClientsPage() {
  return (
    <div className="space-y-8">
      <div>
        <h1 className="text-4xl font-black tracking-tight">Archived Clients</h1>

        <p className="mt-2 text-muted-foreground">
          Manage archived workspaces, historical client records and recovery
          operations.
        </p>
      </div>

      <ArchivedClientsStats />

      <div className="rounded-[32px] border border-border bg-card/60 p-6 shadow-2xl backdrop-blur-xl lg:p-8">
        <div className="mb-8">
          <h2 className="text-2xl font-black tracking-tight">
            Archived Client Directory
          </h2>

          <p className="mt-2 text-muted-foreground">
            Review archived clients and restore archived workspaces when needed.
          </p>
        </div>

        <ArchivedClientsToolbar />

        <div className="mt-8">
          <ArchivedClientsTable />
        </div>
      </div>
    </div>
  );
}

export default ArchivedClientsPage;
