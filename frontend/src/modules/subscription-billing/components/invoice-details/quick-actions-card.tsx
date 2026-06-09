import { CreditCard, Mail, Download, Ban, Send } from "lucide-react";

import { Button } from "@/shared/ui/button";

type Props = {
  onMarkPaid: () => void;

  onSendReminder: () => void;

  onResendInvoice: () => void;

  onCancelInvoice: () => void;
};

function QuickActionsCard({
  onMarkPaid,
  onSendReminder,
  onResendInvoice,
  onCancelInvoice,
}: Props) {
  return (
    <div className="rounded-[28px] border border-border p-6">
      <h3 className="text-xl font-black">Quick Actions</h3>

      <div className="mt-6 space-y-3">
        <Button
          variant="outline"
          className="w-full justify-start"
          onClick={onMarkPaid}
        >
          <CreditCard size={16} />
          Mark As Paid
        </Button>

        <Button
          variant="outline"
          className="w-full justify-start"
          onClick={onSendReminder}
        >
          <Mail size={16} />
          Send Reminder
        </Button>

        <Button
          variant="outline"
          className="w-full justify-start"
          onClick={onResendInvoice}
        >
          <Send size={16} />
          Resend Invoice
        </Button>

        <Button variant="outline" className="w-full justify-start">
          <Download size={16} />
          Download PDF
        </Button>

        <Button
          variant="destructive"
          className="w-full justify-start"
          onClick={onCancelInvoice}
        >
          <Ban size={16} />
          Cancel Invoice
        </Button>
      </div>
    </div>
  );
}

export default QuickActionsCard;
