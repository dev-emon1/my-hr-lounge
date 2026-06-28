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

import type { PackageListItem } from "../../../types/package-list.types";

type Props = {
  open: boolean;
  onOpenChange: (open: boolean) => void;
  pkg: PackageListItem | null;
};

function ClonePackageDialog({ open, onOpenChange, pkg }: Props) {
  return (
    <Dialog open={open} onOpenChange={onOpenChange}>
      <DialogContent className="max-w-2xl overflow-hidden p-0">
        <DialogHeader className="border-b px-8 py-6">
          <DialogTitle>Clone Package</DialogTitle>

          <DialogDescription>
            Create a new package from an existing package.
          </DialogDescription>
        </DialogHeader>

        <div className="p-8">
          <div className="space-y-5">
            <div className="space-y-2">
              <Label>Source Package</Label>

              <Input disabled value={pkg?.name ?? ""} />
            </div>

            <div className="space-y-2">
              <Label>New Package Name</Label>

              <Input placeholder="Growth Plus" />
            </div>

            <div className="space-y-2">
              <Label>New Package Code</Label>

              <Input placeholder="PKG-GROWTH-PLUS" />
            </div>
          </div>
        </div>

        <DialogFooter className="border-t px-8 py-6">
          <Button variant="outline" onClick={() => onOpenChange(false)}>
            Cancel
          </Button>

          <Button>Clone Package</Button>
        </DialogFooter>
      </DialogContent>
    </Dialog>
  );
}

export default ClonePackageDialog;
