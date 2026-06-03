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

function DeleteClientDialog({ open, onOpenChange }: Props) {
  return (
    <Dialog open={open} onOpenChange={onOpenChange}>
      <DialogContent>
        <DialogHeader>
          <DialogTitle>Permanently Delete Client</DialogTitle>

          <DialogDescription>
            This action cannot be undone. All client data will be removed
            permanently.
          </DialogDescription>
        </DialogHeader>

        <DialogFooter>
          <Button variant="outline" onClick={() => onOpenChange(false)}>
            Cancel
          </Button>

          <Button variant="destructive">Delete Forever</Button>
        </DialogFooter>
      </DialogContent>
    </Dialog>
  );
}

export default DeleteClientDialog;
