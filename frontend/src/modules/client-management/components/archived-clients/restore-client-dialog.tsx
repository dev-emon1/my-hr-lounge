import {
  Dialog,
  DialogContent,
  DialogDescription,
  DialogFooter,
  DialogHeader,
  DialogTitle,
} from "@/shared/ui/dialog";

import { Button } from "@/shared/ui/button";

type Props = {
  open: boolean;

  onOpenChange: (open: boolean) => void;
};

function RestoreClientDialog({ open, onOpenChange }: Props) {
  return (
    <Dialog open={open} onOpenChange={onOpenChange}>
      <DialogContent>
        <DialogHeader>
          <DialogTitle>Restore Client</DialogTitle>

          <DialogDescription>
            Restore this archived client and reactivate the workspace.
          </DialogDescription>
        </DialogHeader>

        <DialogFooter>
          <Button variant="outline" onClick={() => onOpenChange(false)}>
            Cancel
          </Button>

          <Button>Restore Client</Button>
        </DialogFooter>
      </DialogContent>
    </Dialog>
  );
}

export default RestoreClientDialog;
