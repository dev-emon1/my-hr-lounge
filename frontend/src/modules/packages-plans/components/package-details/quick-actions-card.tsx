import { useNavigate } from "react-router-dom";

import { Pencil, Copy, Archive } from "lucide-react";

import { Button } from "@/shared/ui/button";

import type { Package } from "../../types/package.types";

type Props = {
  pkg: Package;
  onClone?: () => void;
  onArchive?: () => void;
};

function QuickActionsCard({ pkg, onClone, onArchive }: Props) {
  const navigate = useNavigate();

  const isArchived = pkg.status === "Archived";

  return (
    <div className="rounded-[28px] border border-border p-6">
      <h3 className="text-xl font-black">Quick Actions</h3>

      <div className="mt-6 space-y-3">
        {!isArchived && (
          <>
            <Button
              className="w-full justify-start"
              onClick={() =>
                navigate(`/packages-plans/package-builder/${pkg.packageCode}`)
              }
            >
              <Pencil size={16} />
              Edit Package
            </Button>

            <Button
              variant="outline"
              className="w-full justify-start"
              onClick={onClone}
            >
              <Copy size={16} />
              Clone Package
            </Button>

            <Button
              variant="outline"
              className="w-full justify-start"
              onClick={onArchive}
            >
              <Archive size={16} />
              Archive Package
            </Button>
          </>
        )}
      </div>
    </div>
  );
}

export default QuickActionsCard;
