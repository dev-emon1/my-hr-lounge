import {
  Dialog,
  DialogContent,
  DialogDescription,
  DialogFooter,
  DialogHeader,
  DialogTitle,
} from "@/shared/ui/dialog";

import { Button } from "@/shared/ui/button";

type Props = {
  open: boolean;

  onOpenChange: (open: boolean) => void;
};

function ArchiveClientDialog({ open, onOpenChange }: Props) {
  return (
    <Dialog open={open} onOpenChange={onOpenChange}>
      <DialogContent className="max-w-xl">
        <DialogHeader>
          <DialogTitle>Archive Client</DialogTitle>

          <DialogDescription>Archive this client workspace.</DialogDescription>
        </DialogHeader>

        <div className="p-6">
          <div className="rounded-2xl border p-5">
            <ul className="space-y-3">
              <li>• Workspace hidden</li>

              <li>• Login disabled</li>

              <li>• Data preserved</li>

              <li>• Can be restored later</li>
            </ul>
          </div>
        </div>

        <DialogFooter>
          <Button variant="outline" onClick={() => onOpenChange(false)}>
            Cancel
          </Button>

          <Button variant="destructive">Archive Client</Button>
        </DialogFooter>
      </DialogContent>
    </Dialog>
  );
}

export default ArchiveClientDialog;
