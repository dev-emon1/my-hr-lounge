import {
  Dialog,
  DialogContent,
  DialogDescription,
  DialogFooter,
  DialogHeader,
  DialogTitle,
} from "@/shared/ui/dialog";

import { Button } from "@/shared/ui/button";

import type { Package } from "../../../types/package.types";

type Props = {
  open: boolean;
  onOpenChange: (open: boolean) => void;
  pkg: Package | null;
};

function ArchivePackageDialog({ open, onOpenChange, pkg }: Props) {
  return (
    <Dialog open={open} onOpenChange={onOpenChange}>
      <DialogContent className="max-w-2xl overflow-hidden p-0">
        <DialogHeader className="border-b px-8 py-6">
          <DialogTitle>Archive Package</DialogTitle>

          <DialogDescription>
            Archive package from future subscriptions.
          </DialogDescription>
        </DialogHeader>

        <div className="p-8">
          <div className="rounded-2xl border border-amber-500/20 bg-amber-500/5 p-4">
            <p className="text-sm text-amber-600">
              {pkg?.packageName} will be archived. Existing clients can continue
              using it, but new subscriptions will be blocked.
            </p>
          </div>
        </div>

        <DialogFooter className="border-t px-8 py-6">
          <Button variant="outline" onClick={() => onOpenChange(false)}>
            Cancel
          </Button>

          <Button variant="destructive">Archive Package</Button>
        </DialogFooter>
      </DialogContent>
    </Dialog>
  );
}

export default ArchivePackageDialog;
