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
import FormField from "@/shared/ui/form-field";

import type { Subscription } from "../../../types/subscription.types";

type Props = {
  open: boolean;

  onOpenChange: (open: boolean) => void;

  subscription: Subscription | null;
};

function RenewSubscriptionModal({ open, onOpenChange, subscription }: Props) {
  return (
    <Dialog open={open} onOpenChange={onOpenChange}>
      <DialogContent className="max-w-2xl">
        <DialogHeader>
          <DialogTitle>Renew Subscription</DialogTitle>

          <DialogDescription>
            Extend subscription period and generate renewal billing.
          </DialogDescription>
        </DialogHeader>

        <div className="overflow-y-auto p-8">
          <div className="space-y-6">
            <div className="grid gap-5 md:grid-cols-2">
              <FormField label="Current Package">
                <Input value={subscription?.packageName ?? ""} disabled />
              </FormField>

              <FormField label="Current Expiry">
                <Input value="12 May 2027" disabled />
              </FormField>
            </div>

            <FormField label="Renewal Cycle">
              <Select>
                <SelectTrigger>
                  <SelectValue placeholder="Select cycle" />
                </SelectTrigger>

                <SelectContent>
                  <SelectItem value="monthly">Monthly</SelectItem>

                  <SelectItem value="yearly">Yearly</SelectItem>
                </SelectContent>
              </Select>
            </FormField>

            <FormField label="Renewal Amount">
              <Input defaultValue="50000" />
            </FormField>

            <FormField label="Internal Notes">
              <Textarea rows={5} placeholder="Optional note..." />
            </FormField>
          </div>
        </div>

        <DialogFooter>
          <Button variant="outline" onClick={() => onOpenChange(false)}>
            Cancel
          </Button>

          <Button>Renew Subscription</Button>
        </DialogFooter>
      </DialogContent>
    </Dialog>
  );
}

export default RenewSubscriptionModal;
