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

import type { Transaction } from "../../../types/transaction.types";

type Props = {
  open: boolean;

  onOpenChange: (open: boolean) => void;

  transaction: Transaction | null;
};

function RefundTransactionDialog({ open, onOpenChange, transaction }: Props) {
  return (
    <Dialog open={open} onOpenChange={onOpenChange}>
      <DialogContent className="max-w-3xl overflow-hidden p-0">
        <DialogHeader>
          <DialogTitle>Refund Transaction</DialogTitle>

          <DialogDescription>
            Issue refund and record audit trail.
          </DialogDescription>
        </DialogHeader>

        <div className="max-h-[calc(90vh-180px)] overflow-y-auto p-8">
          <div className="space-y-6">
            <div className="grid gap-5 md:grid-cols-2">
              <div className="space-y-2">
                <Label>Transaction ID</Label>

                <Input value={transaction?.transactionId ?? ""} disabled />
              </div>

              <div className="space-y-2">
                <Label>Client</Label>

                <Input value={transaction?.client ?? ""} disabled />
              </div>
            </div>

            <div className="space-y-2">
              <Label>Refund Amount</Label>

              <Input defaultValue={transaction?.amount ?? ""} />
            </div>

            <div className="space-y-2">
              <Label>Refund Reason</Label>

              <Textarea rows={5} placeholder="Explain refund reason..." />
            </div>
          </div>
        </div>

        <DialogFooter>
          <Button variant="outline" onClick={() => onOpenChange(false)}>
            Cancel
          </Button>

          <Button>Process Refund</Button>
        </DialogFooter>
      </DialogContent>
    </Dialog>
  );
}

export default RefundTransactionDialog;
