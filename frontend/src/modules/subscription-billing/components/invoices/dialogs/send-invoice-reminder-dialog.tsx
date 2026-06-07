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

function SendInvoiceReminderDialog({ open, onOpenChange, invoice }: Props) {
  return (
    <Dialog open={open} onOpenChange={onOpenChange}>
      <DialogContent className="max-w-3xl overflow-hidden p-0">
        <DialogHeader>
          <DialogTitle>Send Invoice Reminder</DialogTitle>

          <DialogDescription>
            Notify client about outstanding invoice.
          </DialogDescription>
        </DialogHeader>

        <div className="max-h-[calc(90vh-180px)] overflow-y-auto p-8">
          <div className="space-y-6">
            <div className="grid gap-5 md:grid-cols-2">
              <div className="space-y-2">
                <Label>Client</Label>

                <Input value={invoice?.client ?? ""} disabled />
              </div>

              <div className="space-y-2">
                <Label>Email</Label>

                <Input value={invoice?.email ?? ""} disabled />
              </div>
            </div>

            <div className="space-y-2">
              <Label>Reminder Type</Label>

              <Select>
                <SelectTrigger>
                  <SelectValue placeholder="Select reminder type" />
                </SelectTrigger>

                <SelectContent>
                  <SelectItem value="gentle">Gentle Reminder</SelectItem>

                  <SelectItem value="due">Due Reminder</SelectItem>

                  <SelectItem value="overdue">Overdue Reminder</SelectItem>
                </SelectContent>
              </Select>
            </div>

            <div className="space-y-2">
              <Label>Message</Label>

              <Textarea rows={6} placeholder="Reminder message..." />
            </div>
          </div>
        </div>

        <DialogFooter>
          <Button variant="outline" onClick={() => onOpenChange(false)}>
            Cancel
          </Button>

          <Button>Send Reminder</Button>
        </DialogFooter>
      </DialogContent>
    </Dialog>
  );
}

export default SendInvoiceReminderDialog;
