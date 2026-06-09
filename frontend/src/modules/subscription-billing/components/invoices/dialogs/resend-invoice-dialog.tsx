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

import type { Invoice } from "../../../types/invoice.types";

type Props = {
  open: boolean;

  onOpenChange: (open: boolean) => void;

  invoice: Invoice | null;
};

function ResendInvoiceDialog({ open, onOpenChange, invoice }: Props) {
  return (
    <Dialog open={open} onOpenChange={onOpenChange}>
      <DialogContent className="max-w-3xl overflow-hidden p-0">
        <DialogHeader>
          <DialogTitle>Resend Invoice</DialogTitle>

          <DialogDescription>
            Send invoice again to the client email address.
          </DialogDescription>
        </DialogHeader>

        <div className="max-h-[calc(90vh-180px)] overflow-y-auto p-8">
          <div className="space-y-6">
            <div className="grid gap-5 md:grid-cols-2">
              <div className="space-y-2">
                <Label>Invoice Number</Label>

                <Input value={invoice?.invoiceNumber ?? ""} disabled />
              </div>

              <div className="space-y-2">
                <Label>Client</Label>

                <Input value={invoice?.client ?? ""} disabled />
              </div>
            </div>

            <div className="space-y-2">
              <Label>Email Address</Label>

              <Input value={invoice?.email ?? ""} disabled />
            </div>

            <div className="space-y-2">
              <Label>Message</Label>

              <Textarea
                rows={6}
                placeholder="Optional message to include with the invoice..."
              />
            </div>
          </div>
        </div>

        <DialogFooter>
          <Button variant="outline" onClick={() => onOpenChange(false)}>
            Cancel
          </Button>

          <Button>Resend Invoice</Button>
        </DialogFooter>
      </DialogContent>
    </Dialog>
  );
}

export default ResendInvoiceDialog;
