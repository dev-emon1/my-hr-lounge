import PackageAssignmentStats from "../components/package-assignment/package-assignment-stats";

import PackageAssignmentToolbar from "../components/package-assignment/package-assignment-toolbar";

import PackageAssignmentTable from "../components/package-assignment/package-assignment-table";

function PackageAssignmentPage() {
  return (
    <div className="space-y-8">
      {/* PAGE HEADER */}

      <div>
        <h1 className="text-4xl font-black tracking-tight">
          Package Assignment
        </h1>

        <p className="mt-2 text-muted-foreground">
          Assign packages, manage subscriptions, monitor revenue impact and
          control client package allocations.
        </p>
      </div>

      {/* STATS */}

      <PackageAssignmentStats />

      {/* MAIN CONTENT */}

      <div className="rounded-[32px] border border-border bg-card/60 p-6 shadow-2xl backdrop-blur-xl lg:p-8">
        <div className="mb-8">
          <h2 className="text-2xl font-black tracking-tight">
            Client Package Directory
          </h2>

          <p className="mt-2 text-muted-foreground">
            Manage package assignments, billing cycles, limits and custom
            overrides.
          </p>
        </div>

        <PackageAssignmentToolbar />

        <div className="mt-8">
          <PackageAssignmentTable />
        </div>
      </div>
    </div>
  );
}

export default PackageAssignmentPage;
