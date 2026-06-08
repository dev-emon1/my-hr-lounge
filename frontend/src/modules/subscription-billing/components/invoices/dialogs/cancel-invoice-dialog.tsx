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

import type { Invoice } from "../../../types/invoice.types";

type Props = {
  open: boolean;

  onOpenChange: (open: boolean) => void;

  invoice: Invoice | null;
};

function CancelInvoiceDialog({ open, onOpenChange, invoice }: Props) {
  return (
    <Dialog open={open} onOpenChange={onOpenChange}>
      <DialogContent className="max-w-2xl overflow-hidden p-0">
        <DialogHeader>
          <DialogTitle>Cancel Invoice</DialogTitle>

          <DialogDescription>
            Cancel invoice without deleting records.
          </DialogDescription>
        </DialogHeader>

        <div className="max-h-[calc(90vh-180px)] overflow-y-auto p-8">
          <div className="rounded-2xl border border-red-500/20 bg-red-500/5 p-4">
            <p className="text-sm text-red-600">
              Invoice #{invoice?.invoiceNumber} will be marked as cancelled.
            </p>
          </div>

          <div className="mt-6 space-y-2">
            <Label>Cancellation Reason</Label>

            <Textarea
              rows={5}
              placeholder="Explain why this invoice is being cancelled..."
            />
          </div>
        </div>

        <DialogFooter>
          <Button variant="outline" onClick={() => onOpenChange(false)}>
            Keep Invoice
          </Button>

          <Button variant="destructive">Cancel Invoice</Button>
        </DialogFooter>
      </DialogContent>
    </Dialog>
  );
}

export default CancelInvoiceDialog;
