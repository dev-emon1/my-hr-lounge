import { useState } from "react";

import PackagesStats from "../components/all-packages/packages-stats";
import PackagesToolbar from "../components/all-packages/packages-toolbar";
import PackagesTable from "../components/all-packages/packages-table";

import { useGetPackagesQuery } from "../api/package-builder-api";

import type { Package } from "../types/package.types";
import ClonePackageDialog from "../components/all-packages/dialogs/clone-package-dialog";
import ArchivePackageDialog from "../components/all-packages/dialogs/archive-package-dialog";

function AllPackagesPage() {
  const [selectedPackage, setSelectedPackage] = useState<Package | null>(null);

  const [archiveOpen, setArchiveOpen] = useState(false);
  const [cloneOpen, setCloneOpen] = useState(false);

  const [search, setSearch] = useState("");

  const [statusFilter, setStatusFilter] = useState("all");

  const [trialFilter, setTrialFilter] = useState("all");

  const { data, isLoading, isError } = useGetPackagesQuery();
  const packages = data?.data ?? [];
  console.log(data);

  const filteredPackages = packages.filter((pkg) => {
    const matchesSearch =
      pkg.name.toLowerCase().includes(search.toLowerCase()) ||
      pkg.slug.toLowerCase().includes(search.toLowerCase());

    const matchesStatus =
      statusFilter === "all"
        ? true
        : statusFilter === "active"
          ? pkg.is_active
          : !pkg.is_active;

    const matchesTrial =
      trialFilter === "all"
        ? true
        : trialFilter === "available"
          ? pkg.is_trial
          : !pkg.is_trial;

    return matchesSearch && matchesStatus && matchesTrial;
  });

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
        <PackagesStats packages={packages} />

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

          <PackagesToolbar
            search={search}
            onSearchChange={setSearch}
            statusFilter={statusFilter}
            onStatusChange={setStatusFilter}
            trialFilter={trialFilter}
            onTrialChange={setTrialFilter}
          />

          {isError && (
            <div className="rounded-[32px] border border-border p-8">
              Failed to load packages.
            </div>
          )}

          {isLoading ? (
            <div className="rounded-[32px] border border-border p-8">
              Loading packages...
            </div>
          ) : (
            <div className="mt-8">
              <PackagesTable
                packages={filteredPackages}
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
          )}
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
