import { Trash2 } from "lucide-react";

import { toast } from "sonner";

import { Button } from "@/shared/ui/button";

type Props = {
  selectedCount: number;

  onDelete: () => void;
};

function CompaniesBulkActions({ selectedCount, onDelete }: Props) {
  if (!selectedCount) {
    return null;
  }

  return (
    <div className="flex flex-col gap-4 rounded-3xl border border-primary/20 bg-primary/5 p-5 md:flex-row md:items-center md:justify-between">
      <div>
        <h3 className="font-bold">{selectedCount} companies selected</h3>

        <p className="text-sm text-muted-foreground">
          Perform bulk actions for selected rows
        </p>
      </div>

      <div className="flex gap-3">
        <Button
          variant="destructive"
          className="gap-2"
          onClick={() => {
            onDelete();

            toast.success("Companies deleted successfully");
          }}
        >
          <Trash2 size={16} />
          Delete Selected
        </Button>
      </div>
    </div>
  );
}

export default CompaniesBulkActions;
