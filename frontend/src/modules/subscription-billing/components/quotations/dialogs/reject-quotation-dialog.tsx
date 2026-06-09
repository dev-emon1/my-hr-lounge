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

import type { Quotation } from "../../../types/quotation.types";

type Props = {
  open: boolean;

  onOpenChange: (open: boolean) => void;

  quotation: Quotation | null;
};

function RejectQuotationDialog({ open, onOpenChange, quotation }: Props) {
  return (
    <Dialog open={open} onOpenChange={onOpenChange}>
      <DialogContent className="max-w-2xl overflow-hidden p-0">
        <DialogHeader>
          <DialogTitle>Reject Quotation</DialogTitle>

          <DialogDescription>
            Reject quotation and record reason.
          </DialogDescription>
        </DialogHeader>

        <div className="max-h-[calc(90vh-180px)] overflow-y-auto p-8">
          <div className="space-y-6">
            <div className="rounded-2xl border border-red-500/20 bg-red-500/5 p-4">
              <p className="text-sm text-red-600">
                {quotation?.quotationNumber} will be rejected.
              </p>
            </div>

            <div className="space-y-2">
              <Label>Rejection Reason</Label>

              <Textarea rows={5} placeholder="Explain rejection reason..." />
            </div>
          </div>
        </div>

        <DialogFooter>
          <Button variant="outline" onClick={() => onOpenChange(false)}>
            Cancel
          </Button>

          <Button variant="destructive">Reject Quotation</Button>
        </DialogFooter>
      </DialogContent>
    </Dialog>
  );
}

export default RejectQuotationDialog;
