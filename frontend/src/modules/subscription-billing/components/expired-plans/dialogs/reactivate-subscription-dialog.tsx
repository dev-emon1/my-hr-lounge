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

import type { ExpiredSubscription } from "../../../types/expired-subscription.types";

type Props = {
  open: boolean;

  onOpenChange: (open: boolean) => void;

  subscription: ExpiredSubscription | null;
};

function ReactivateSubscriptionDialog({
  open,
  onOpenChange,
  subscription,
}: Props) {
  return (
    <Dialog open={open} onOpenChange={onOpenChange}>
      <DialogContent className="max-w-2xl">
        <DialogHeader>
          <DialogTitle>Reactivate Subscription</DialogTitle>

          <DialogDescription>
            Restore subscription access and reactivate workspace.
          </DialogDescription>
        </DialogHeader>

        <div className="overflow-y-auto p-8">
          <div className="grid gap-5 md:grid-cols-2">
            <div className="space-y-2">
              <Label>Client</Label>

              <Input value={subscription?.client ?? ""} disabled />
            </div>

            <div className="space-y-2">
              <Label>Package</Label>

              <Input value={subscription?.packageName ?? ""} disabled />
            </div>
          </div>

          <div className="space-y-2">
            <Label>New Expiry Date</Label>

            <Input type="date" />
          </div>

          <div className="space-y-2">
            <Label>Billing Amount</Label>

            <Input defaultValue={subscription?.revenue ?? ""} />
          </div>

          <div className="space-y-2">
            <Label>Notes</Label>

            <Textarea rows={4} placeholder="Internal notes..." />
          </div>
        </div>

        <DialogFooter>
          <Button variant="outline" onClick={() => onOpenChange(false)}>
            Cancel
          </Button>

          <Button>Reactivate Subscription</Button>
        </DialogFooter>
      </DialogContent>
    </Dialog>
  );
}

export default ReactivateSubscriptionDialog;
