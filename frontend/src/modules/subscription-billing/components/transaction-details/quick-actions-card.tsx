import { Download, RotateCcw, AlertTriangle } from "lucide-react";

import { Button } from "@/shared/ui/button";

type Props = {
  onRefund: () => void;

  onMarkFailed: () => void;
};

function QuickActionsCard({ onRefund, onMarkFailed }: Props) {
  return (
    <div className="rounded-[28px] border border-border p-6">
      <h3 className="text-xl font-black">Quick Actions</h3>

      <div className="mt-6 space-y-3">
        <Button variant="outline" className="w-full justify-start">
          <Download size={16} />
          Download Receipt
        </Button>

        <Button
          variant="outline"
          className="w-full justify-start"
          onClick={onRefund}
        >
          <RotateCcw size={16} />
          Refund Transaction
        </Button>

        <Button
          variant="outline"
          className="w-full justify-start"
          onClick={onMarkFailed}
        >
          <AlertTriangle size={16} />
          Mark Failed
        </Button>
      </div>
    </div>
  );
}

export default QuickActionsCard;
