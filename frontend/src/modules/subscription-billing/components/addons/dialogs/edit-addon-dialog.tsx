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

import type { Addon } from "../../../types/addon.types";

type Props = {
  open: boolean;
  onOpenChange: (open: boolean) => void;
  addon: Addon | null;
};

function EditAddonDialog({ open, onOpenChange, addon }: Props) {
  return (
    <Dialog open={open} onOpenChange={onOpenChange}>
      <DialogContent className="max-w-3xl overflow-hidden p-0">
        <DialogHeader className="border-b px-8 py-6">
          <DialogTitle>Edit Addon</DialogTitle>

          <DialogDescription>Update addon information.</DialogDescription>
        </DialogHeader>

        <div className="max-h-[calc(90vh-180px)] overflow-y-auto px-8 py-6">
          <div className="space-y-6">
            <div className="grid gap-5 md:grid-cols-2">
              <div className="space-y-2">
                <Label>Addon Name</Label>

                <Input defaultValue={addon?.name} />
              </div>

              <div className="space-y-2">
                <Label>Addon Code</Label>

                <Input defaultValue={addon?.code} />
              </div>

              <div className="space-y-2">
                <Label>Category</Label>

                <Input defaultValue={addon?.category} />
              </div>

              <div className="space-y-2">
                <Label>Price</Label>

                <Input type="number" defaultValue={addon?.price} />
              </div>
            </div>

            <div className="space-y-2">
              <Label>Description</Label>

              <Textarea rows={6} defaultValue={addon?.description} />
            </div>
          </div>
        </div>

        <DialogFooter className="border-t px-8 py-6">
          <Button variant="outline" onClick={() => onOpenChange(false)}>
            Cancel
          </Button>

          <Button>Save Changes</Button>
        </DialogFooter>
      </DialogContent>
    </Dialog>
  );
}

export default EditAddonDialog;
