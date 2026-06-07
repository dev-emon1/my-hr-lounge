import { useState } from "react";

import { ArchiveRestore, Eye, MoreHorizontal, Trash2 } from "lucide-react";

import { Button } from "@/shared/ui/button";

import {
  DropdownMenu,
  DropdownMenuContent,
  DropdownMenuItem,
  DropdownMenuTrigger,
} from "@/shared/ui/dropdown-menu";

import RestoreClientDialog from "./restore-client-dialog";

import DeleteClientDialog from "./delete-client-dialog";

function ArchivedRowActions() {
  const [restoreOpen, setRestoreOpen] = useState(false);

  const [deleteOpen, setDeleteOpen] = useState(false);

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
            onClick={() => setRestoreOpen(true)}
          >
            <ArchiveRestore size={16} />

            <span>Restore Client</span>
          </DropdownMenuItem>

          <DropdownMenuItem
            className="cursor-pointer rounded-xl text-destructive focus:text-destructive"
            onClick={() => setDeleteOpen(true)}
          >
            <Trash2 size={16} />

            <span>Permanently Delete</span>
          </DropdownMenuItem>
        </DropdownMenuContent>
      </DropdownMenu>

      <RestoreClientDialog open={restoreOpen} onOpenChange={setRestoreOpen} />

      <DeleteClientDialog open={deleteOpen} onOpenChange={setDeleteOpen} />
    </>
  );
}

export default ArchivedRowActions;
