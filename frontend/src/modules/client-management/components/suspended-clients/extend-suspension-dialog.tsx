import {
  Dialog,
  DialogContent,
  DialogDescription,
  DialogFooter,
  DialogHeader,
  DialogTitle,
} from "@/shared/ui/dialog";

import { Button } from "@/shared/ui/button";

import { Input } from "@/shared/ui/input";

import { Label } from "@/shared/ui/label";

type Props = {
  open: boolean;

  onOpenChange: (open: boolean) => void;
};

function ExtendSuspensionDialog({ open, onOpenChange }: Props) {
  return (
    <Dialog open={open} onOpenChange={onOpenChange}>
      <DialogContent>
        <DialogHeader>
          <DialogTitle>Extend Suspension</DialogTitle>

          <DialogDescription>Extend suspension duration.</DialogDescription>
        </DialogHeader>

        <div className="space-y-4 py-4">
          <div>
            <Label>New Expiry Date</Label>

            <Input type="date" />
          </div>
        </div>

        <DialogFooter>
          <Button variant="outline" onClick={() => onOpenChange(false)}>
            Cancel
          </Button>

          <Button>Update</Button>
        </DialogFooter>
      </DialogContent>
    </Dialog>
  );
}

export default ExtendSuspensionDialog;
