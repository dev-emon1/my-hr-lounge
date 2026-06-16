import { useState } from "react";

import PackagesStats from "../components/all-packages/packages-stats";
import PackagesToolbar from "../components/all-packages/packages-toolbar";
import PackagesTable from "../components/all-packages/packages-table";

import { mockPackages } from "../constants/mock-packages";

import type { Package } from "../types/package.types";
import ClonePackageDialog from "../components/all-packages/dialogs/clone-package-dialog";
import ArchivePackageDialog from "../components/all-packages/dialogs/archive-package-dialog";

function AllPackagesPage() {
  const [selectedPackage, setSelectedPackage] = useState<Package | null>(null);

  const [archiveOpen, setArchiveOpen] = useState(false);
  const [cloneOpen, setCloneOpen] = useState(false);

  return (
    <>
      <div className="space-y-8">
        {/* PAGE HEADER */}
        <div>
          <h1 className="text-4xl font-black tracking-tight">All Packages</h1>

          <p className="mt-2 text-muted-foreground">
            Manage subscription packages, pricing, limits and lifecycle.
          </p>
        </div>

        {/* STATS */}
        <PackagesStats />

        {/* DIRECTORY */}
        <div className="rounded-[32px] border border-border bg-card/60 p-6 shadow-2xl backdrop-blur-xl lg:p-8">
          <div className="mb-8">
            <h2 className="text-2xl font-black tracking-tight">
              Package Directory
            </h2>

            <p className="mt-2 text-muted-foreground">
              Manage available packages across the SaaS platform.
            </p>
          </div>

          <PackagesToolbar />

          <div className="mt-8">
            <PackagesTable
              packages={mockPackages}
              onClone={(pkg) => {
                setSelectedPackage(pkg);
                setCloneOpen(true);
              }}
              onArchive={(pkg) => {
                setSelectedPackage(pkg);
                setArchiveOpen(true);
              }}
            />
          </div>
        </div>
      </div>

      <ClonePackageDialog
        open={cloneOpen}
        onOpenChange={setCloneOpen}
        pkg={selectedPackage}
      />

      <ArchivePackageDialog
        open={archiveOpen}
        onOpenChange={setArchiveOpen}
        pkg={selectedPackage}
      />
    </>
  );
}

export default AllPackagesPage;
