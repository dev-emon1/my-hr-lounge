import { useState } from "react";

import { Eye, MoreHorizontal } from "lucide-react";

import { Button } from "@/shared/ui/button";

import {
  DropdownMenu,
  DropdownMenuContent,
  DropdownMenuItem,
  DropdownMenuTrigger,
} from "@/shared/ui/dropdown-menu";

import ActivityDetailsDrawer from "./activity-details-drawer";

function ActivityRowActions() {
  const [open, setOpen] = useState(false);

  return (
    <>
      <DropdownMenu>
        <DropdownMenuTrigger asChild>
          <Button size="icon" variant="ghost" className="rounded-xl">
            <MoreHorizontal size={18} />
          </Button>
        </DropdownMenuTrigger>

        <DropdownMenuContent align="end" className="w-52 rounded-2xl">
          <DropdownMenuItem
            className="cursor-pointer rounded-xl"
            onClick={() => setOpen(true)}
          >
            <Eye size={16} />

            <span>View Details</span>
          </DropdownMenuItem>
        </DropdownMenuContent>
      </DropdownMenu>

      <ActivityDetailsDrawer open={open} onOpenChange={setOpen} />
    </>
  );
}

export default ActivityRowActions;
