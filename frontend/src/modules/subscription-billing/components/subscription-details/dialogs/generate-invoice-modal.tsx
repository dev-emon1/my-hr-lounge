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

import { Textarea } from "@/shared/ui/textarea";

import {
  Select,
  SelectContent,
  SelectItem,
  SelectTrigger,
  SelectValue,
} from "@/shared/ui/select";

import type { Subscription } from "../../../types/subscription.types";

import FormField from "@/shared/ui/form-field";

type Props = {
  open: boolean;

  onOpenChange: (open: boolean) => void;

  subscription: Subscription | null;
};

function GenerateInvoiceModal({ open, onOpenChange, subscription }: Props) {
  return (
    <Dialog open={open} onOpenChange={onOpenChange}>
      <DialogContent className="max-w-3xl">
        <DialogHeader>
          <DialogTitle>Generate Invoice</DialogTitle>

          <DialogDescription>
            Create a billing invoice for this subscription.
          </DialogDescription>
        </DialogHeader>

        <div className="overflow-y-auto p-8">
          <div className="space-y-6">
            <div className="grid gap-5 md:grid-cols-2">
              <FormField label="Client">
                <Input value={subscription?.client ?? ""} disabled />
              </FormField>

              <FormField label="Package">
                <Input value={subscription?.packageName ?? ""} disabled />
              </FormField>

              <FormField label="Invoice Type">
                <Select>
                  <SelectTrigger>
                    <SelectValue placeholder="Select invoice type" />
                  </SelectTrigger>

                  <SelectContent>
                    <SelectItem value="renewal">Renewal</SelectItem>

                    <SelectItem value="upgrade">Package Upgrade</SelectItem>

                    <SelectItem value="addon">Addon Purchase</SelectItem>

                    <SelectItem value="custom">Custom Charge</SelectItem>
                  </SelectContent>
                </Select>
              </FormField>
            </div>

            <div className="grid gap-5 md:grid-cols-3">
              <FormField label="Amount">
                <Input defaultValue="50000" />
              </FormField>

              <FormField label="Tax / VAT">
                <Input defaultValue="0" />
              </FormField>

              <FormField label="Discount">
                <Input defaultValue="0" />
              </FormField>
            </div>

            <FormField label="Due Date">
              <Input type="date" />
            </FormField>

            <FormField label="Internal Notes">
              <Textarea rows={5} placeholder="Optional notes..." />
            </FormField>
          </div>
        </div>

        <DialogFooter>
          <Button variant="outline" onClick={() => onOpenChange(false)}>
            Cancel
          </Button>

          <Button>Generate Invoice</Button>
        </DialogFooter>
      </DialogContent>
    </Dialog>
  );
}

export default GenerateInvoiceModal;
