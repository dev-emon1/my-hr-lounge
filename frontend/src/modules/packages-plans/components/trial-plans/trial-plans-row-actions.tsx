import { useNavigate } from "react-router-dom";

import { MoreHorizontal, Eye, Pencil, Copy, Archive } from "lucide-react";

import { Button } from "@/shared/ui/button";

import {
  DropdownMenu,
  DropdownMenuContent,
  DropdownMenuItem,
  DropdownMenuTrigger,
} from "@/shared/ui/dropdown-menu";

import type { TrialPlan } from "../../types/trial-plan.types";

type Props = {
  trial: TrialPlan;

  onClone?: (trial: TrialPlan) => void;

  onArchive?: (trial: TrialPlan) => void;
};

function TrialPlansRowActions({ trial, onClone, onArchive }: Props) {
  const navigate = useNavigate();

  const isInactive = trial.status === "Inactive";

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
            navigate(`/packages-plans/trial-plans/${trial.trialCode}`)
          }
        >
          <Eye size={16} />
          View Details
        </DropdownMenuItem>

        {!isInactive && (
          <>
            <DropdownMenuItem
              onClick={() =>
                navigate(
                  `/packages-plans/trial-plan-builder/${trial.trialCode}`,
                )
              }
            >
              <Pencil size={16} />
              Edit Trial Plan
            </DropdownMenuItem>

            <DropdownMenuItem onClick={() => onClone?.(trial)}>
              <Copy size={16} />
              Clone Trial Plan
            </DropdownMenuItem>

            <DropdownMenuItem onClick={() => onArchive?.(trial)}>
              <Archive size={16} />
              Archive Trial Plan
            </DropdownMenuItem>
          </>
        )}
      </DropdownMenuContent>
    </DropdownMenu>
  );
}

export default TrialPlansRowActions;
