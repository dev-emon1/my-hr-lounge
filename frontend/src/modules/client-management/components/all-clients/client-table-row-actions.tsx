import { MoreHorizontal, Eye, Pencil, ShieldX, Trash2 } from "lucide-react";

import { Button } from "@/shared/ui/button";

import {
  DropdownMenu,
  DropdownMenuContent,
  DropdownMenuItem,
  DropdownMenuTrigger,
} from "@/shared/ui/dropdown-menu";

import { useNavigate } from "react-router-dom";

type Props = {
  clientId: string;
};

function ClientTableRowActions({ clientId }: Props) {
  const navigate = useNavigate();

  return (
    <DropdownMenu>
      <DropdownMenuTrigger asChild>
        <Button size="icon" variant="ghost" className="rounded-xl">
          <MoreHorizontal size={18} />
        </Button>
      </DropdownMenuTrigger>

      <DropdownMenuContent
        align="end"
        className="w-52 rounded-2xl border-border bg-popover/95 backdrop-blur-xl"
      >
        <DropdownMenuItem
          className="cursor-pointer rounded-xl"
          onClick={() => navigate(`/client-management/clients/${clientId}`)}
        >
          <Eye size={16} />

          <span>View Details</span>
        </DropdownMenuItem>

        <DropdownMenuItem className="cursor-pointer rounded-xl">
          <Pencil size={16} />

          <span>Edit Client</span>
        </DropdownMenuItem>

        <DropdownMenuItem className="cursor-pointer rounded-xl text-amber-500 focus:text-amber-500">
          <ShieldX size={16} />

          <span>Suspend Client</span>
        </DropdownMenuItem>

        <DropdownMenuItem className="cursor-pointer rounded-xl text-destructive focus:text-destructive">
          <Trash2 size={16} />

          <span>Delete Client</span>
        </DropdownMenuItem>
      </DropdownMenuContent>
    </DropdownMenu>
  );
}

export default ClientTableRowActions;
