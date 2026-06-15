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

import type { Addon } from "../../../types/addon.types";

type Props = {
  open: boolean;
  onOpenChange: (open: boolean) => void;
  addon: Addon | null;
};

function AssignAddonDialog({ open, onOpenChange, addon }: Props) {
  return (
    <Dialog open={open} onOpenChange={onOpenChange}>
      <DialogContent className="max-w-2xl overflow-hidden p-0">
        <DialogHeader className="border-b px-8 py-6">
          <DialogTitle>Assign Addon To Client</DialogTitle>

          <DialogDescription>
            Assign addon to a subscribed client.
          </DialogDescription>
        </DialogHeader>

        <div className="px-8 py-6">
          <div className="space-y-6">
            <div className="space-y-2">
              <Label>Client</Label>

              <Input placeholder="Select Client" />
            </div>

            <div className="rounded-2xl border border-border bg-muted/30 p-5">
              <div className="flex items-center justify-between">
                <div>
                  <p className="font-semibold">{addon?.name}</p>

                  <p className="text-sm text-muted-foreground">
                    {addon?.category}
                  </p>
                </div>

                <div className="text-right">
                  <p className="font-bold">
                    ৳ {addon?.price?.toLocaleString()}
                  </p>

                  <p className="text-sm text-muted-foreground">
                    {addon?.billingType}
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <DialogFooter className="border-t px-8 py-6">
          <Button variant="outline" onClick={() => onOpenChange(false)}>
            Cancel
          </Button>

          <Button>Assign Addon</Button>
        </DialogFooter>
      </DialogContent>
    </Dialog>
  );
}

export default AssignAddonDialog;
