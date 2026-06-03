import { useState } from "react";

import { MoreHorizontal, Settings2 } from "lucide-react";

import { Button } from "@/shared/ui/button";

import {
  DropdownMenu,
  DropdownMenuContent,
  DropdownMenuItem,
  DropdownMenuTrigger,
} from "@/shared/ui/dropdown-menu";

import ManagePackageModal from "./modals/manage-package-modal";

function PackageRowActions() {
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
            <Settings2 size={16} />

            <span>Manage Package</span>
          </DropdownMenuItem>
        </DropdownMenuContent>
      </DropdownMenu>

      <ManagePackageModal open={open} onOpenChange={setOpen} />
    </>
  );
}

export default PackageRowActions;
