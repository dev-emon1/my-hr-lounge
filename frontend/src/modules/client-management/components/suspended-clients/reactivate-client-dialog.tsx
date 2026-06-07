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

function ReactivateClientDialog({ open, onOpenChange }: Props) {
  return (
    <Dialog open={open} onOpenChange={onOpenChange}>
      <DialogContent>
        <DialogHeader>
          <DialogTitle>Reactivate Client</DialogTitle>

          <DialogDescription>
            Restore workspace access and reactivate the client.
          </DialogDescription>
        </DialogHeader>

        <DialogFooter>
          <Button variant="outline" onClick={() => onOpenChange(false)}>
            Cancel
          </Button>

          <Button>Reactivate</Button>
        </DialogFooter>
      </DialogContent>
    </Dialog>
  );
}

export default ReactivateClientDialog;
