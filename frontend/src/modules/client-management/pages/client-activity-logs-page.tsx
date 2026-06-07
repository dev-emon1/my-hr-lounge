import ActivityStats from "../components/activity-logs/activity-stats";

import ActivityToolbar from "../components/activity-logs/activity-toolbar";

import ActivityTable from "../components/activity-logs/activity-table";

function ClientActivityLogsPage() {
  return (
    <div className="space-y-8">
      <div>
        <h1 className="text-4xl font-black tracking-tight">
          Client Activity Logs
        </h1>

        <p className="mt-2 text-muted-foreground">
          Monitor client activities, user actions, authentication events, module
          usage and system operations across all workspaces.
        </p>
      </div>

      <ActivityStats />

      <div className="rounded-[32px] border border-border bg-card/60 p-6 shadow-2xl backdrop-blur-xl lg:p-8">
        <div className="mb-8">
          <h2 className="text-2xl font-black tracking-tight">
            Activity Timeline
          </h2>

          <p className="mt-2 text-muted-foreground">
            Track activities performed by client administrators and users.
          </p>
        </div>

        <ActivityToolbar />

        <div className="mt-8">
          <ActivityTable />
        </div>
      </div>
    </div>
  );
}

export default ClientActivityLogsPage;
