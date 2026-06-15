import {
  Dialog,
  DialogContent,
  DialogDescription,
  DialogFooter,
  DialogHeader,
  DialogTitle,
} from "@/shared/ui/dialog";

import { Button } from "@/shared/ui/button";
import { Label } from "@/shared/ui/label";
import { Textarea } from "@/shared/ui/textarea";

import type { SubscriptionChange } from "../../../types/subscription-change.types";

type Props = {
  open: boolean;
  onOpenChange: (open: boolean) => void;
  change: SubscriptionChange | null;
};

function ApproveChangeDialog({ open, onOpenChange, change }: Props) {
  return (
    <Dialog open={open} onOpenChange={onOpenChange}>
      <DialogContent className="max-w-2xl overflow-hidden p-0">
        <DialogHeader className="border-b px-8 py-6">
          <DialogTitle>Approve Change Request</DialogTitle>

          <DialogDescription>
            Approve subscription change request.
          </DialogDescription>
        </DialogHeader>

        <div className="px-8 py-6">
          <div className="space-y-6">
            <div className="rounded-2xl border border-green-500/20 bg-green-500/5 p-5">
              <p className="font-semibold text-green-600">
                {change?.requestNumber}
              </p>

              <p className="mt-1 text-sm text-muted-foreground">
                This request will be approved.
              </p>
            </div>

            <div className="space-y-2">
              <Label>Approval Notes</Label>

              <Textarea rows={5} placeholder="Optional approval notes..." />
            </div>
          </div>
        </div>

        <DialogFooter className="border-t px-8 py-6">
          <Button variant="outline" onClick={() => onOpenChange(false)}>
            Cancel
          </Button>

          <Button>Approve Request</Button>
        </DialogFooter>
      </DialogContent>
    </Dialog>
  );
}

export default ApproveChangeDialog;
