import { useNavigate } from "react-router-dom";

import {
  Eye,
  Download,
  CreditCard,
  Mail,
  Ban,
  MoreHorizontal,
} from "lucide-react";

import { Button } from "@/shared/ui/button";

import {
  DropdownMenu,
  DropdownMenuContent,
  DropdownMenuItem,
  DropdownMenuTrigger,
} from "@/shared/ui/dropdown-menu";

import type { Invoice } from "../../types/invoice.types";

type Props = {
  invoice: Invoice;

  onMarkPaid: (invoice: Invoice) => void;

  onReminder: (invoice: Invoice) => void;

  onCancel: (invoice: Invoice) => void;
};

function InvoicesRowActions({
  invoice,
  onMarkPaid,
  onReminder,
  onCancel,
}: Props) {
  const navigate = useNavigate();

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
            navigate(`/subscription-billing/invoices/${invoice.id}`)
          }
        >
          <Eye size={16} />
          View Invoice
        </DropdownMenuItem>

        <DropdownMenuItem>
          <Download size={16} />
          Download PDF
        </DropdownMenuItem>

        <DropdownMenuItem onClick={() => onMarkPaid(invoice)}>
          <CreditCard size={16} />
          Mark As Paid
        </DropdownMenuItem>

        <DropdownMenuItem onClick={() => onReminder(invoice)}>
          <Mail size={16} />
          Send Reminder
        </DropdownMenuItem>

        <DropdownMenuItem
          onClick={() => onCancel(invoice)}
          className="text-red-600"
        >
          <Ban size={16} />
          Cancel Invoice
        </DropdownMenuItem>
      </DropdownMenuContent>
    </DropdownMenu>
  );
}

export default InvoicesRowActions;
