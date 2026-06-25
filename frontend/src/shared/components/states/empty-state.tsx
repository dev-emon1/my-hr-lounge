import { SearchX } from "lucide-react";

type Props = {
  title?: string;
  description?: string;
};

function EmptyState({
  title = "No Data Found",
  description = "There is nothing to display.",
}: Props) {
  return (
    <div className="flex flex-col items-center justify-center py-20">
      <div className="flex h-16 w-16 items-center justify-center rounded-2xl border border-border bg-muted/20">
        <SearchX size={28} />
      </div>

      <h3 className="mt-5 text-lg font-bold">{title}</h3>

      <p className="mt-2 text-sm text-muted-foreground">{description}</p>
    </div>
  );
}

export default EmptyState;
