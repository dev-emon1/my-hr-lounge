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

import {
  Select,
  SelectContent,
  SelectItem,
  SelectTrigger,
  SelectValue,
} from "@/shared/ui/select";

import type { Invoice } from "../../../types/invoice.types";

type Props = {
  open: boolean;

  onOpenChange: (open: boolean) => void;

  invoice: Invoice | null;
};

function MarkAsPaidDialog({ open, onOpenChange, invoice }: Props) {
  return (
    <Dialog open={open} onOpenChange={onOpenChange}>
      <DialogContent className="max-w-3xl overflow-hidden p-0">
        <DialogHeader>
          <DialogTitle>Mark Invoice As Paid</DialogTitle>

          <DialogDescription>
            Record payment and close the invoice.
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
              <Label>Payment Method</Label>

              <Select>
                <SelectTrigger>
                  <SelectValue placeholder="Select payment method" />
                </SelectTrigger>

                <SelectContent>
                  <SelectItem value="bank">Bank Transfer</SelectItem>

                  <SelectItem value="cash">Cash</SelectItem>

                  <SelectItem value="cheque">Cheque</SelectItem>

                  <SelectItem value="mobile-banking">Mobile Banking</SelectItem>
                </SelectContent>
              </Select>
            </div>

            <div className="grid gap-5 md:grid-cols-2">
              <div className="space-y-2">
                <Label>Reference Number</Label>

                <Input placeholder="TXN-123456" />
              </div>

              <div className="space-y-2">
                <Label>Payment Date</Label>

                <Input type="date" />
              </div>
            </div>

            <div className="space-y-2">
              <Label>Received Amount</Label>

              <Input defaultValue={invoice?.amount ?? ""} />
            </div>

            <div className="space-y-2">
              <Label>Internal Notes</Label>

              <Textarea rows={5} placeholder="Optional finance notes..." />
            </div>
          </div>
        </div>

        <DialogFooter>
          <Button variant="outline" onClick={() => onOpenChange(false)}>
            Cancel
          </Button>

          <Button>Mark As Paid</Button>
        </DialogFooter>
      </DialogContent>
    </Dialog>
  );
}

export default MarkAsPaidDialog;
