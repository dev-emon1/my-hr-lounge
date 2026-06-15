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

type Props = {
  open: boolean;
  onOpenChange: (open: boolean) => void;
};

function CreateAddonDialog({ open, onOpenChange }: Props) {
  return (
    <Dialog open={open} onOpenChange={onOpenChange}>
      <DialogContent className="max-w-3xl overflow-hidden p-0">
        <DialogHeader className="border-b px-8 py-6">
          <DialogTitle>Create Addon</DialogTitle>

          <DialogDescription>Create a new platform addon.</DialogDescription>
        </DialogHeader>

        <div className="max-h-[calc(90vh-180px)] overflow-y-auto px-8 py-6">
          <div className="space-y-6">
            <div className="grid gap-5 md:grid-cols-2">
              <div className="space-y-2">
                <Label>Addon Name</Label>

                <Input placeholder="Advanced Payroll" />
              </div>

              <div className="space-y-2">
                <Label>Addon Code</Label>

                <Input placeholder="ADP" />
              </div>

              <div className="space-y-2">
                <Label>Category</Label>

                <Input placeholder="Payroll" />
              </div>

              <div className="space-y-2">
                <Label>Price</Label>

                <Input type="number" placeholder="5000" />
              </div>
            </div>

            <div className="space-y-2">
              <Label>Description</Label>

              <Textarea rows={6} placeholder="Addon description..." />
            </div>
          </div>
        </div>

        <DialogFooter className="border-t px-8 py-6">
          <Button variant="outline" onClick={() => onOpenChange(false)}>
            Cancel
          </Button>

          <Button>Create Addon</Button>
        </DialogFooter>
      </DialogContent>
    </Dialog>
  );
}

export default CreateAddonDialog;
