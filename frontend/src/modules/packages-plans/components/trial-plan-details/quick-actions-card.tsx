import { useNavigate } from "react-router-dom";

import { Pencil, Copy, Archive } from "lucide-react";

import { Button } from "@/shared/ui/button";

import type { TrialPlan } from "../../types/trial-plan.types";

type Props = {
  trial: TrialPlan;

  onClone?: () => void;

  onArchive?: () => void;
};

function QuickActionsCard({ trial, onClone, onArchive }: Props) {
  const navigate = useNavigate();

  return (
    <div className="rounded-[32px] border border-border bg-card p-6">
      <h3 className="text-xl font-black">Quick Actions</h3>

      <div className="mt-6 space-y-3">
        <Button
          variant="outline"
          className="w-full justify-start"
          onClick={() =>
            navigate(`/packages-plans/trial-plan-builder/${trial.trialCode}`)
          }
        >
          <Pencil size={18} />
          Edit Trial Plan
        </Button>

        <Button
          variant="outline"
          className="w-full justify-start"
          onClick={onClone}
        >
          <Copy size={18} />
          Clone Trial Plan
        </Button>

        <Button
          variant="outline"
          className="w-full justify-start"
          onClick={onArchive}
        >
          <Archive size={18} />
          Archive Trial Plan
        </Button>
      </div>
    </div>
  );
}

export default QuickActionsCard;
