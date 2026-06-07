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

import { Textarea } from "@/shared/ui/textarea";

type Props = {
  open: boolean;

  onOpenChange: (open: boolean) => void;
};

function SuspendClientDialog({ open, onOpenChange }: Props) {
  return (
    <Dialog open={open} onOpenChange={onOpenChange}>
      <DialogContent className="max-w-2xl">
        <DialogHeader>
          <DialogTitle>Suspend Client</DialogTitle>

          <DialogDescription>
            Suspend workspace access for this client.
          </DialogDescription>
        </DialogHeader>

        <div className="space-y-6 p-6">
          <div>
            <Label>Reason</Label>

            <Textarea rows={5} placeholder="Enter suspension reason..." />
          </div>

          <div>
            <Label>Suspend Until</Label>

            <Input type="date" />
          </div>

          <div className="rounded-2xl border border-destructive/30 bg-destructive/5 p-5">
            <p className="font-semibold text-destructive">
              Client users will lose access immediately after suspension.
            </p>
          </div>
        </div>

        <DialogFooter>
          <Button variant="outline" onClick={() => onOpenChange(false)}>
            Cancel
          </Button>

          <Button variant="destructive">Suspend Client</Button>
        </DialogFooter>
      </DialogContent>
    </Dialog>
  );
}

export default SuspendClientDialog;
