import {
  Table,
  TableBody,
  TableCell,
  TableHead,
  TableHeader,
  TableRow,
} from "@/shared/ui/table";

import TrialPlanStatusBadge from "./trial-plan-status-badge";
import TrialPlansRowActions from "./trial-plans-row-actions";

import type { TrialPlan } from "../../types/trial-plan.types";

type Props = {
  trialPlans: TrialPlan[];

  onClone?: (trial: TrialPlan) => void;

  onArchive?: (trial: TrialPlan) => void;
};

function TrialPlansTable({ trialPlans, onClone, onArchive }: Props) {
  return (
    <div className="overflow-hidden rounded-[28px] border border-border">
      <Table>
        <TableHeader>
          <TableRow>
            <TableHead>Trial Plan</TableHead>

            <TableHead>Duration</TableHead>

            <TableHead>Employees</TableHead>

            <TableHead>Modules</TableHead>

            <TableHead>Status</TableHead>

            <TableHead className="w-[70px]" />
          </TableRow>
        </TableHeader>

        <TableBody>
          {trialPlans.length === 0 ? (
            <TableRow>
              <TableCell colSpan={6} className="py-12 text-center">
                <p className="font-semibold">No Trial Plans Found</p>

                <p className="mt-2 text-sm text-muted-foreground">
                  No trial plans available.
                </p>
              </TableCell>
            </TableRow>
          ) : (
            trialPlans.map((trial) => (
              <TableRow key={trial.id}>
                <TableCell>
                  <div>
                    <p className="font-semibold">{trial.trialName}</p>

                    <p className="text-sm text-muted-foreground">{trial.id}</p>
                  </div>
                </TableCell>

                <TableCell>{trial.durationDays} Days</TableCell>

                <TableCell>{trial.employeeLimit}</TableCell>

                <TableCell>{trial.modules.length}</TableCell>

                <TableCell>
                  <TrialPlanStatusBadge status={trial.status} />
                </TableCell>

                <TableCell>
                  <TrialPlansRowActions
                    trial={trial}
                    onClone={onClone}
                    onArchive={onArchive}
                  />
                </TableCell>
              </TableRow>
            ))
          )}
        </TableBody>
      </Table>
    </div>
  );
}

export default TrialPlansTable;
