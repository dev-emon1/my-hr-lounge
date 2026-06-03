import { useState } from "react";

import { Eye, MoreHorizontal, RotateCcw, CalendarClock } from "lucide-react";

import { Button } from "@/shared/ui/button";

import {
  DropdownMenu,
  DropdownMenuContent,
  DropdownMenuItem,
  DropdownMenuTrigger,
} from "@/shared/ui/dropdown-menu";

import ReactivateClientDialog from "./reactivate-client-dialog";

import ExtendSuspensionDialog from "./extend-suspension-dialog";

function SuspendedRowActions() {
  const [reactivateOpen, setReactivateOpen] = useState(false);

  const [extendOpen, setExtendOpen] = useState(false);

  return (
    <>
      <DropdownMenu>
        <DropdownMenuTrigger asChild>
          <Button size="icon" variant="ghost" className="rounded-xl">
            <MoreHorizontal size={18} />
          </Button>
        </DropdownMenuTrigger>

        <DropdownMenuContent align="end" className="w-56 rounded-2xl">
          <DropdownMenuItem className="cursor-pointer rounded-xl">
            <Eye size={16} />

            <span>View Client</span>
          </DropdownMenuItem>

          <DropdownMenuItem
            className="cursor-pointer rounded-xl"
            onClick={() => setReactivateOpen(true)}
          >
            <RotateCcw size={16} />

            <span>Reactivate Client</span>
          </DropdownMenuItem>

          <DropdownMenuItem
            className="cursor-pointer rounded-xl"
            onClick={() => setExtendOpen(true)}
          >
            <CalendarClock size={16} />

            <span>Extend Suspension</span>
          </DropdownMenuItem>
        </DropdownMenuContent>
      </DropdownMenu>

      <ReactivateClientDialog
        open={reactivateOpen}
        onOpenChange={setReactivateOpen}
      />

      <ExtendSuspensionDialog open={extendOpen} onOpenChange={setExtendOpen} />
    </>
  );
}

export default SuspendedRowActions;
