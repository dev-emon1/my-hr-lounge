import { useNavigate } from "react-router-dom";

import { MoreHorizontal, Eye, Pencil, Copy, Archive } from "lucide-react";

import { Button } from "@/shared/ui/button";

import {
  DropdownMenu,
  DropdownMenuContent,
  DropdownMenuItem,
  DropdownMenuTrigger,
} from "@/shared/ui/dropdown-menu";

import type { Package } from "../../types/package.types";

type Props = {
  pkg: Package;
  onClone?: (pkg: Package) => void;
  onArchive?: (pkg: Package) => void;
};

function PackagesRowActions({ pkg, onClone, onArchive }: Props) {
  const navigate = useNavigate();

  const isArchived = pkg.status === "Archived";

  return (
    <DropdownMenu>
      <DropdownMenuTrigger asChild>
        <Button variant="ghost" size="icon">
          <MoreHorizontal size={18} />
        </Button>
      </DropdownMenuTrigger>

      <DropdownMenuContent align="end">
        <DropdownMenuItem
          onClick={() =>
            navigate(`/packages-plans/packages/${pkg.packageCode}`)
          }
        >
          <Eye size={16} />
          View Details
        </DropdownMenuItem>

        {!isArchived && (
          <>
            <DropdownMenuItem
              onClick={() =>
                navigate(`/packages-plans/package-builder/${pkg.packageCode}`)
              }
            >
              <Pencil size={16} />
              Edit Package
            </DropdownMenuItem>

            <DropdownMenuItem onClick={() => onClone?.(pkg)}>
              <Copy size={16} />
              Clone Package
            </DropdownMenuItem>

            <DropdownMenuItem onClick={() => onArchive?.(pkg)}>
              <Archive size={16} />
              Archive Package
            </DropdownMenuItem>
          </>
        )}
      </DropdownMenuContent>
    </DropdownMenu>
  );
}

export default PackagesRowActions;
