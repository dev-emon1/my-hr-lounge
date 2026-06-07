import { useState } from "react";

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

import { Checkbox } from "@/shared/ui/checkbox";

import type { Subscription } from "../../../types/subscription.types";

type Props = {
  open: boolean;

  onOpenChange: (open: boolean) => void;

  subscription: Subscription | null;
};

function SuspendSubscriptionDialog({
  open,
  onOpenChange,
  subscription,
}: Props) {
  const [notifyClient, setNotifyClient] = useState(true);

  const [lockWorkspace, setLockWorkspace] = useState(true);

  return (
    <Dialog open={open} onOpenChange={onOpenChange}>
      <DialogContent className="max-w-2xl">
        <DialogHeader>
          <DialogTitle>Suspend Subscription</DialogTitle>

          <DialogDescription>
            Suspend client subscription access and apply workspace restrictions.
          </DialogDescription>
        </DialogHeader>

        <div className="overflow-y-auto p-8">
          <div className="space-y-6">
            <div className="rounded-2xl border border-red-200 bg-red-50 p-4">
              <p className="font-semibold text-red-700">Warning</p>

              <p className="mt-1 text-sm text-red-600">
                Suspending this subscription may prevent client users from
                accessing their HR workspace.
              </p>
            </div>

            <div className="grid gap-5 md:grid-cols-2">
              <div className="space-y-2">
                <Label>Client</Label>

                <Input value={subscription?.client ?? ""} disabled />
              </div>

              <div className="space-y-2">
                <Label>Current Package</Label>

                <Input value={subscription?.packageName ?? ""} disabled />
              </div>
            </div>

            <div className="space-y-2">
              <Label>Effective Date</Label>

              <Input type="date" />
            </div>

            <div className="space-y-2">
              <Label>Suspension Reason</Label>

              <Textarea
                rows={5}
                placeholder="Explain why this subscription is being suspended..."
              />
            </div>

            <div className="rounded-2xl border border-border p-5">
              <h4 className="font-semibold">Suspension Options</h4>

              <div className="mt-5 space-y-4">
                <div className="flex items-center space-x-3">
                  <Checkbox
                    checked={notifyClient}
                    onCheckedChange={(checked) =>
                      setNotifyClient(Boolean(checked))
                    }
                  />

                  <Label>Notify client by email</Label>
                </div>

                <div className="flex items-center space-x-3">
                  <Checkbox
                    checked={lockWorkspace}
                    onCheckedChange={(checked) =>
                      setLockWorkspace(Boolean(checked))
                    }
                  />

                  <Label>Lock workspace access</Label>
                </div>
              </div>
            </div>
          </div>
        </div>

        <DialogFooter>
          <Button variant="outline" onClick={() => onOpenChange(false)}>
            Cancel
          </Button>

          <Button variant="destructive">Suspend Subscription</Button>
        </DialogFooter>
      </DialogContent>
    </Dialog>
  );
}

export default SuspendSubscriptionDialog;
