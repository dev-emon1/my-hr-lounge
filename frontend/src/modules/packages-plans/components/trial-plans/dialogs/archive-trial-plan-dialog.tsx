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

function ArchiveTrialPlanDialog({ open, onOpenChange, trialPlan }: Props) {
  const handleArchive = () => {
    console.log("ARCHIVE", trialPlan);

    onOpenChange(false);
  };

  if (!trialPlan) {
    return null;
  }

  return (
    <Dialog open={open} onOpenChange={onOpenChange}>
      <DialogContent>
        <DialogHeader>
          <DialogTitle>Archive Trial Plan</DialogTitle>

          <DialogDescription>
            Are you sure you want to archive{" "}
            <strong>{trialPlan.trialName}</strong>?
          </DialogDescription>
        </DialogHeader>

        <DialogFooter>
          <Button variant="outline" onClick={() => onOpenChange(false)}>
            Cancel
          </Button>

          <Button variant="destructive" onClick={handleArchive}>
            Archive
          </Button>
        </DialogFooter>
      </DialogContent>
    </Dialog>
  );
}

export default ArchiveTrialPlanDialog;
