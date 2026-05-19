import type { ColumnDef } from "@tanstack/react-table";

import { MoreHorizontal, Pencil, Trash2 } from "lucide-react";

import { toast } from "sonner";

import { Button } from "@/shared/ui/button";

import { Checkbox } from "@/shared/ui/checkbox";

import SortableHeader from "@/shared/components/data-table/sortable-header";

import CustomDropdownMenu from "@/shared/components/dropdown/dropdown-menu";

import DropdownItem from "@/shared/components/dropdown/dropdown-item";

import CompanyStatusBadge from "./company-status-badge";

import type { Company } from "../types/company.types";


export const companiesColumns: ColumnDef<Company>[] = [
  {
    id: "select",

    header: ({ table }) => (
      <Checkbox
        checked={table.getIsAllRowsSelected()}
        onCheckedChange={(value) => table.toggleAllRowsSelected(!!value)}
      />
    ),

    cell: ({ row }) => (
      <Checkbox
        checked={row.getIsSelected()}
        onCheckedChange={(value) => row.toggleSelected(!!value)}
      />
    ),
  },

  {
    accessorKey: "companyName",

    header: ({ column }) => <SortableHeader column={column} title="Company" />,
  },

  {
    accessorKey: "industry",

    header: ({ column }) => <SortableHeader column={column} title="Industry" />,
  },

  {
    accessorKey: "employees",

    header: ({ column }) => (
      <SortableHeader column={column} title="Employees" />
    ),
  },

  {
    accessorKey: "subscription",

    header: "Subscription",
  },

  {
    accessorKey: "status",

    header: "Status",

    cell: ({ row }) => <CompanyStatusBadge status={row.original.status} />,
  },

  {
    id: "actions",

    header: "",

    cell: ({ row }) => (
      <CustomDropdownMenu
        trigger={
          <Button size="icon" variant="ghost">
            <MoreHorizontal size={18} />
          </Button>
        }
      >
        <DropdownItem
          onClick={() => toast.info(`Edit ${row.original.companyName}`)}
        >
          <div className="flex items-center gap-2">
            <Pencil size={16} />
            Edit
          </div>
        </DropdownItem>

        <DropdownItem
          destructive
          onClick={() => toast.error(`Delete ${row.original.companyName}`)}
        >
          <div className="flex items-center gap-2">
            <Trash2 size={16} />
            Delete
          </div>
        </DropdownItem>
      </CustomDropdownMenu>
    ),
  },
];
