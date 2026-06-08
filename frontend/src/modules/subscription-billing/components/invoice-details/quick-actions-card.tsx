import { CreditCard, Mail, Download } from "lucide-react";

import { Button } from "@/shared/ui/button";

function QuickActionsCard() {
  return (
    <div className="rounded-[28px] border border-border p-6">
      <h3 className="text-xl font-black">Quick Actions</h3>

      <div className="mt-6 space-y-3">
        <Button variant="outline" className="w-full justify-start">
          <CreditCard size={16} />
          Mark As Paid
        </Button>

        <Button variant="outline" className="w-full justify-start">
          <Mail size={16} />
          Send Reminder
        </Button>

        <Button variant="outline" className="w-full justify-start">
          <Download size={16} />
          Download PDF
        </Button>
      </div>
    </div>
  );
}

export default QuickActionsCard;
