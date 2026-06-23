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

import type { Quotation } from "../../../types/quotation.types";

type Props = {
  open: boolean;

  onOpenChange: (open: boolean) => void;

  quotation: Quotation | null;
};

function SendQuotationDialog({ open, onOpenChange, quotation }: Props) {
  return (
    <Dialog open={open} onOpenChange={onOpenChange}>
      <DialogContent className="max-w-3xl overflow-hidden p-0">
        <DialogHeader>
          <DialogTitle>Send Quotation</DialogTitle>

          <DialogDescription>
            Send quotation to client via email.
          </DialogDescription>
        </DialogHeader>

        <div className="max-h-[calc(90vh-180px)] overflow-y-auto p-8">
          <div className="space-y-6">
            <div className="grid gap-5 md:grid-cols-2">
              <div className="space-y-2">
                <Label>Quotation Number</Label>

                <Input value={quotation?.quotationNumber ?? ""} disabled />
              </div>

              <div className="space-y-2">
                <Label>Client</Label>

                <Input value={quotation?.client ?? ""} disabled />
              </div>
            </div>

            <div className="space-y-2">
              <Label>Email Address</Label>

              <Input placeholder="client@company.com" />
            </div>

            <div className="space-y-2">
              <Label>Subject</Label>

              <Input
                defaultValue={`Quotation ${quotation?.quotationNumber ?? ""}`}
              />
            </div>

            <div className="space-y-2">
              <Label>Message</Label>

              <Textarea
                rows={8}
                defaultValue={`Dear ${quotation?.client ?? "Client"},

Please find the attached quotation for your review.

If you have any questions or require any adjustments, please let us know.

Thank you.

Best Regards`}
              />
            </div>
          </div>
        </div>

        <DialogFooter>
          <Button variant="outline" onClick={() => onOpenChange(false)}>
            Cancel
          </Button>

          <Button>Send Quotation</Button>
        </DialogFooter>
      </DialogContent>
    </Dialog>
  );
}

export default SendQuotationDialog;
