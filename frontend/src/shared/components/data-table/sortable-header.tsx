import type { Column } from "@tanstack/react-table";

import { ArrowDown, ArrowUp, ArrowUpDown } from "lucide-react";

type Props<TData> = {
  column: Column<TData>;

  title: string;
};

function SortableHeader<TData>({ column, title }: Props<TData>) {
  const sorted = column.getIsSorted();

  return (
    <button
      onClick={() => column.toggleSorting(sorted === "asc")}
      className="flex items-center gap-2"
    >
      {title}

      {sorted === "asc" ? (
        <ArrowUp size={16} />
      ) : sorted === "desc" ? (
        <ArrowDown size={16} />
      ) : (
        <ArrowUpDown size={16} />
      )}
    </button>
  );
}

export default SortableHeader;
