import { Trash2 } from "lucide-react";

import { Button } from "@/shared/ui/button";

import Modal from "./modal";

type Props = {
  open: boolean;

  onOpenChange: (open: boolean) => void;

  onConfirm: () => void;

  loading?: boolean;
};

function DeleteConfirmationModal({
  open,
  onOpenChange,
  onConfirm,
  loading,
}: Props) {
  return (
    <Modal open={open} onOpenChange={onOpenChange} className="max-w-md">
      <div className="flex flex-col items-center text-center">
        <div className="mb-5 flex h-20 w-20 items-center justify-center rounded-full bg-destructive/10 text-destructive">
          <Trash2 size={36} />
        </div>

        <h2 className="text-2xl font-black">Delete Company?</h2>

        <p className="mt-3 text-sm text-muted-foreground">
          This action cannot be undone.
        </p>

        <div className="mt-8 flex w-full gap-3">
          <Button
            variant="outline"
            className="flex-1"
            onClick={() => onOpenChange(false)}
          >
            Cancel
          </Button>

          <Button
            variant="destructive"
            className="flex-1"
            onClick={onConfirm}
            disabled={loading}
          >
            Delete
          </Button>
        </div>
      </div>
    </Modal>
  );
}

export default DeleteConfirmationModal;
