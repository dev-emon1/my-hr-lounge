import type { Table } from "@tanstack/react-table";

import { Eye } from "lucide-react";

import { Button } from "@/shared/ui/button";

import CustomDropdownMenu from "@/shared/components/dropdown/dropdown-menu";

import DropdownItem from "@/shared/components/dropdown/dropdown-item";

type Props<TData> = {
  table: Table<TData>;
};

function DataTableViewOptions<TData>({ table }: Props<TData>) {
  const columns = table.getAllColumns().filter((column) => column.getCanHide());

  return (
    <CustomDropdownMenu
      trigger={
        <Button variant="outline" className="gap-2">
          <Eye size={16} />
          View
        </Button>
      }
    >
      <div className="space-y-1">
        {columns.map((column) => (
          <DropdownItem
            key={column.id}
            onClick={() => column.toggleVisibility()}
          >
            <div className="flex items-center gap-2">
              <input type="checkbox" checked={column.getIsVisible()} readOnly />

              <span className="capitalize">{column.id}</span>
            </div>
          </DropdownItem>
        ))}
      </div>
    </CustomDropdownMenu>
  );
}

export default DataTableViewOptions;
