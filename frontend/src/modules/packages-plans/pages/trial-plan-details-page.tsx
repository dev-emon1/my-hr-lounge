import { useState } from "react";
import { useParams } from "react-router-dom";

import { mockTrialPlans } from "../constants/mock-trial-plans";

import TrialPlanHeroSection from "../components/trial-plan-details/trial-plan-hero-section";
import TrialPlanInformationCard from "../components/trial-plan-details/trial-plan-information-card";
import TrialPlanModulesCard from "../components/trial-plan-details/trial-plan-modules-card";
import TrialPlanHealthCard from "../components/trial-plan-details/trial-plan-health-card";
import QuickActionsCard from "../components/trial-plan-details/quick-actions-card";

import CloneTrialPlanDialog from "../components/trial-plans/dialogs/clone-trial-plan-dialog";
import ArchiveTrialPlanDialog from "../components/trial-plans/dialogs/archive-trial-plan-dialog";

function TrialPlanDetailsPage() {
  const [cloneOpen, setCloneOpen] = useState(false);

  const [archiveOpen, setArchiveOpen] = useState(false);

  const { trialCode } = useParams();

  const trial = mockTrialPlans.find((item) => item.trialCode === trialCode);

  if (!trial) {
    return (
      <div className="rounded-[28px] border border-border p-8">
        Trial Plan Not Found
      </div>
    );
  }

  return (
    <>
      <div className="space-y-8">
        <TrialPlanHeroSection trial={trial} />

        <div className="grid gap-8 xl:grid-cols-[minmax(0,1fr)_380px]">
          <div className="space-y-8">
            <TrialPlanInformationCard trial={trial} />

            <TrialPlanModulesCard trial={trial} />
          </div>

          <div>
            <div className="sticky top-6 space-y-6">
              <TrialPlanHealthCard trial={trial} />

              <QuickActionsCard
                trial={trial}
                onClone={() => setCloneOpen(true)}
                onArchive={() => setArchiveOpen(true)}
              />
            </div>
          </div>
        </div>
      </div>

      <CloneTrialPlanDialog
        open={cloneOpen}
        onOpenChange={setCloneOpen}
        trialPlan={trial}
      />

      <ArchiveTrialPlanDialog
        open={archiveOpen}
        onOpenChange={setArchiveOpen}
        trialPlan={trial}
      />
    </>
  );
}

export default TrialPlanDetailsPage;
