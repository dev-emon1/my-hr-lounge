import { Button } from "@/shared/ui/button";

type Props = {
  currentPage: number;

  totalPages: number;

  onPrevious: () => void;

  onNext: () => void;
};

function DataTablePagination({
  currentPage,
  totalPages,
  onPrevious,
  onNext,
}: Props) {
  return (
    <div className="flex items-center justify-between border-t border-border pt-4">
      <p className="text-sm text-muted-foreground">
        Page {currentPage} of {totalPages}
      </p>

      <div className="flex items-center gap-2">
        <Button
          variant="outline"
          onClick={onPrevious}
          disabled={currentPage === 1}
        >
          Previous
        </Button>

        <Button
          variant="outline"
          onClick={onNext}
          disabled={currentPage === totalPages}
        >
          Next
        </Button>
      </div>
    </div>
  );
}

export default DataTablePagination;
