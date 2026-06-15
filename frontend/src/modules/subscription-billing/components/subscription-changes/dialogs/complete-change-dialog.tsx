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

function CompleteChangeDialog({ open, onOpenChange, change }: Props) {
  return (
    <Dialog open={open} onOpenChange={onOpenChange}>
      <DialogContent className="max-w-2xl overflow-hidden p-0">
        <DialogHeader className="border-b px-8 py-6">
          <DialogTitle>Complete Change Request</DialogTitle>

          <DialogDescription>Mark request as completed.</DialogDescription>
        </DialogHeader>

        <div className="px-8 py-6">
          <div className="space-y-6">
            <div className="rounded-2xl border border-blue-500/20 bg-blue-500/5 p-5">
              <p className="font-semibold text-blue-600">
                {change?.requestNumber}
              </p>

              <p className="mt-1 text-sm text-muted-foreground">
                Subscription change implementation completed.
              </p>
            </div>

            <div className="space-y-2">
              <Label>Completion Notes</Label>

              <Textarea rows={5} placeholder="Implementation notes..." />
            </div>
          </div>
        </div>

        <DialogFooter className="border-t px-8 py-6">
          <Button variant="outline" onClick={() => onOpenChange(false)}>
            Cancel
          </Button>

          <Button>Complete Request</Button>
        </DialogFooter>
      </DialogContent>
    </Dialog>
  );
}

export default CompleteChangeDialog;
