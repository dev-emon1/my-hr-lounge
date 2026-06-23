import {
  Dialog,
  DialogContent,
  DialogDescription,
  DialogFooter,
  DialogHeader,
  DialogTitle,
} from "@/shared/ui/dialog";

import { Button } from "@/shared/ui/button";

import type { TrialPlan } from "../../../types/trial-plan.types";

type Props = {
  open: boolean;
  onOpenChange: (open: boolean) => void;
  trialPlan: TrialPlan | null;
};

function CloneTrialPlanDialog({ open, onOpenChange, trialPlan }: Props) {
  const handleClone = () => {
    console.log("CLONE", trialPlan);

    onOpenChange(false);
  };

  if (!trialPlan) {
    return null;
  }

  return (
    <Dialog open={open} onOpenChange={onOpenChange}>
      <DialogContent>
        <DialogHeader>
          <DialogTitle>Clone Trial Plan</DialogTitle>

          <DialogDescription>
            Create a duplicate copy of <strong>{trialPlan.trialName}</strong>.
          </DialogDescription>
        </DialogHeader>

        <DialogFooter>
          <Button variant="outline" onClick={() => onOpenChange(false)}>
            Cancel
          </Button>

          <Button onClick={handleClone}>Clone Trial Plan</Button>
        </DialogFooter>
      </DialogContent>
    </Dialog>
  );
}

export default CloneTrialPlanDialog;
