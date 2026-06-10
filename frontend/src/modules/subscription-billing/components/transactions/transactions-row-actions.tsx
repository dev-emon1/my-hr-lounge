import { useNavigate } from "react-router-dom";

import {
  Eye,
  Download,
  RotateCcw,
  AlertTriangle,
  MoreHorizontal,
} from "lucide-react";

import { Button } from "@/shared/ui/button";

import {
  DropdownMenu,
  DropdownMenuContent,
  DropdownMenuItem,
  DropdownMenuTrigger,
} from "@/shared/ui/dropdown-menu";

import type { Transaction } from "../../types/transaction.types";

type Props = {
  transaction: Transaction;

  onRefund: (transaction: Transaction) => void;

  onMarkFailed: (transaction: Transaction) => void;
};

function TransactionsRowActions({
  transaction,
  onRefund,
  onMarkFailed,
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
            navigate(`/subscription-billing/transactions/${transaction.id}`)
          }
        >
          <Eye size={16} />
          View Details
        </DropdownMenuItem>

        <DropdownMenuItem>
          <Download size={16} />
          Download Receipt
        </DropdownMenuItem>

        <DropdownMenuItem onClick={() => onRefund(transaction)}>
          <RotateCcw size={16} />
          Refund Transaction
        </DropdownMenuItem>

        <DropdownMenuItem onClick={() => onMarkFailed(transaction)}>
          <AlertTriangle size={16} />
          Mark Failed
        </DropdownMenuItem>
      </DropdownMenuContent>
    </DropdownMenu>
  );
}

export default TransactionsRowActions;
