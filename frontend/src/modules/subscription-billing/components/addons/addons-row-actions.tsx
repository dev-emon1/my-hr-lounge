import { useNavigate } from "react-router-dom";

import { Eye, Pencil, MoreHorizontal } from "lucide-react";

import { Button } from "@/shared/ui/button";

import {
  DropdownMenu,
  DropdownMenuContent,
  DropdownMenuItem,
  DropdownMenuTrigger,
} from "@/shared/ui/dropdown-menu";

import type { Addon } from "../../types/addon.types";

type Props = {
  addon: Addon;

  onEdit: (addon: Addon) => void;
};

function AddonsRowActions({ addon, onEdit }: Props) {
  const navigate = useNavigate();

  return (
    <DropdownMenu>
      <DropdownMenuTrigger asChild>
        <Button variant="ghost" size="icon">
          <MoreHorizontal size={18} />
        </Button>
      </DropdownMenuTrigger>

      <DropdownMenuContent align="end">
        <DropdownMenuItem
          onClick={() => navigate(`/billing/addons/${addon.id}`)}
        >
          <Eye size={16} />
          View Details
        </DropdownMenuItem>

        <DropdownMenuItem onClick={() => onEdit(addon)}>
          <Pencil size={16} />
          Edit Addon
        </DropdownMenuItem>
      </DropdownMenuContent>
    </DropdownMenu>
  );
}

export default AddonsRowActions;
