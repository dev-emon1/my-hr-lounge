import {
  Dialog,
  DialogContent,
  DialogDescription,
  DialogFooter,
  DialogHeader,
  DialogTitle,
} from "@/shared/ui/dialog";

import { Button } from "@/shared/ui/button";
import { Textarea } from "@/shared/ui/textarea";
import { Label } from "@/shared/ui/label";

import type { Transaction } from "../../../types/transaction.types";

type Props = {
  open: boolean;

  onOpenChange: (open: boolean) => void;

  transaction: Transaction | null;
};

function MarkFailedDialog({ open, onOpenChange, transaction }: Props) {
  return (
    <Dialog open={open} onOpenChange={onOpenChange}>
      <DialogContent className="max-w-2xl overflow-hidden p-0">
        <DialogHeader>
          <DialogTitle>Mark Transaction Failed</DialogTitle>

          <DialogDescription>
            Update transaction status and log failure reason.
          </DialogDescription>
        </DialogHeader>

        <div className="max-h-[calc(90vh-180px)] overflow-y-auto p-8">
          <div className="space-y-5">
            <div className="rounded-2xl border border-amber-500/20 bg-amber-500/5 p-4">
              <p className="text-sm text-amber-600">
                Transaction #{transaction?.transactionId} will be marked as
                failed.
              </p>
            </div>

            <div className="space-y-2">
              <Label>Failure Reason</Label>

              <Textarea rows={5} placeholder="Explain failure reason..." />
            </div>
          </div>
        </div>

        <DialogFooter>
          <Button variant="outline" onClick={() => onOpenChange(false)}>
            Cancel
          </Button>

          <Button variant="destructive">Mark Failed</Button>
        </DialogFooter>
      </DialogContent>
    </Dialog>
  );
}

export default MarkFailedDialog;
