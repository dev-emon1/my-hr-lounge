import { useState } from "react";
import { useParams } from "react-router-dom";

import { mockPackages } from "../constants/mock-packages";

import PackageHeroSection from "../components/package-details/package-hero-section";
import PackageInformationCard from "../components/package-details/package-information-card";
import PackagePricingCard from "../components/package-details/package-pricing-card";
import PackageLimitsCard from "../components/package-details/package-limits-card";
import PackageHealthCard from "../components/package-details/package-health-card";
import QuickActionsCard from "../components/package-details/quick-actions-card";
import ArchivePackageDialog from "../components/all-packages/dialogs/archive-package-dialog";
import ClonePackageDialog from "../components/all-packages/dialogs/clone-package-dialog";

function PackageDetailsPage() {
  const [cloneOpen, setCloneOpen] = useState(false);
  const [archiveOpen, setArchiveOpen] = useState(false);

  const { packageCode } = useParams();

  const pkg = mockPackages.find((item) => item.packageCode === packageCode);

  if (!pkg) {
    return (
      <div className="rounded-[28px] border border-border p-8">
        Package Not Found
      </div>
    );
  }

  return (
    <>
      <div className="space-y-8">
        <PackageHeroSection pkg={pkg} />

        <div className="grid gap-8 xl:grid-cols-[minmax(0,1fr)_380px]">
          <div className="space-y-8">
            <PackageInformationCard pkg={pkg} />

            <PackagePricingCard pkg={pkg} />

            <PackageLimitsCard pkg={pkg} />
          </div>

          <div>
            <div className="sticky top-6 space-y-6">
              <PackageHealthCard pkg={pkg} />

              <QuickActionsCard
                pkg={pkg}
                onClone={() => setCloneOpen(true)}
                onArchive={() => setArchiveOpen(true)}
              />
            </div>
          </div>
        </div>
      </div>

      <ClonePackageDialog
        open={cloneOpen}
        onOpenChange={setCloneOpen}
        pkg={pkg}
      />

      <ArchivePackageDialog
        open={archiveOpen}
        onOpenChange={setArchiveOpen}
        pkg={pkg}
      />
    </>
  );
}

export default PackageDetailsPage;
