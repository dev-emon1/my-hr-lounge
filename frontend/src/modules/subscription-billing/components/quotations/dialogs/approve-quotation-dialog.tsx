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

function ApproveQuotationDialog({ open, onOpenChange, quotation }: Props) {
  return (
    <Dialog open={open} onOpenChange={onOpenChange}>
      <DialogContent className="max-w-2xl overflow-hidden p-0">
        <DialogHeader>
          <DialogTitle>Approve Quotation</DialogTitle>

          <DialogDescription>Confirm quotation approval.</DialogDescription>
        </DialogHeader>

        <div className="max-h-[calc(90vh-180px)] overflow-y-auto p-8">
          <div className="space-y-6">
            <div className="rounded-2xl border border-green-500/20 bg-green-500/5 p-4">
              <p className="text-sm text-green-600">
                {quotation?.quotationNumber} will be marked as approved.
              </p>
            </div>

            <div className="space-y-2">
              <Label>Approval Notes</Label>

              <Textarea rows={5} placeholder="Optional approval notes..." />
            </div>
          </div>
        </div>

        <DialogFooter>
          <Button variant="outline" onClick={() => onOpenChange(false)}>
            Cancel
          </Button>

          <Button>Approve Quotation</Button>
        </DialogFooter>
      </DialogContent>
    </Dialog>
  );
}

export default ApproveQuotationDialog;
