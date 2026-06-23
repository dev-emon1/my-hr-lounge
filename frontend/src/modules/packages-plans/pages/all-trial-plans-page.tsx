import { useState } from "react";

import TrialPlansStats from "../components/trial-plans/trial-plans-stats";
import TrialPlansToolbar from "../components/trial-plans/trial-plans-toolbar";
import TrialPlansTable from "../components/trial-plans/trial-plans-table";

import CloneTrialPlanDialog from "../components/trial-plans/dialogs/clone-trial-plan-dialog";
import ArchiveTrialPlanDialog from "../components/trial-plans/dialogs/archive-trial-plan-dialog";

import { mockTrialPlans } from "../constants/mock-trial-plans";

import type { TrialPlan } from "../types/trial-plan.types";

function AllTrialPlansPage() {
  const [selectedTrialPlan, setSelectedTrialPlan] = useState<TrialPlan | null>(
    null,
  );

  const [cloneOpen, setCloneOpen] = useState(false);

  const [archiveOpen, setArchiveOpen] = useState(false);

  return (
    <>
      <div className="space-y-8">
        {/* PAGE HEADER */}

        <div>
          <h1 className="text-4xl font-black tracking-tight">Trial Plans</h1>

          <p className="mt-2 text-muted-foreground">
            Manage trial plans, durations, module access and lifecycle.
          </p>
        </div>

        {/* STATS */}

        <TrialPlansStats />

        {/* DIRECTORY */}

        <div className="rounded-[32px] border border-border bg-card/60 p-6 shadow-2xl backdrop-blur-xl lg:p-8">
          <div className="mb-8">
            <h2 className="text-2xl font-black tracking-tight">
              Trial Plan Directory
            </h2>

            <p className="mt-2 text-muted-foreground">
              Manage available trial plans across the SaaS platform.
            </p>
          </div>

          <TrialPlansToolbar />

          <div className="mt-8">
            <TrialPlansTable
              trialPlans={mockTrialPlans}
              onClone={(trial) => {
                setSelectedTrialPlan(trial);

                setCloneOpen(true);
              }}
              onArchive={(trial) => {
                setSelectedTrialPlan(trial);

                setArchiveOpen(true);
              }}
            />
          </div>
        </div>
      </div>

      <CloneTrialPlanDialog
        open={cloneOpen}
        onOpenChange={setCloneOpen}
        trialPlan={selectedTrialPlan}
      />

      <ArchiveTrialPlanDialog
        open={archiveOpen}
        onOpenChange={setArchiveOpen}
        trialPlan={selectedTrialPlan}
      />
    </>
  );
}

export default AllTrialPlansPage;
