import {
  Table,
  TableBody,
  TableCell,
  TableHead,
  TableHeader,
  TableRow,
} from "@/shared/ui/table";

import { Badge } from "@/shared/ui/badge";

import type { SubscriptionChange } from "../../types/subscription-change.types";

import SubscriptionChangesRowActions from "./subscription-changes-row-actions";

type Props = {
  changes: SubscriptionChange[];

  onApprove?: (change: SubscriptionChange) => void;

  onReject?: (change: SubscriptionChange) => void;

  onComplete?: (change: SubscriptionChange) => void;
};

function SubscriptionChangesTable({
  changes,
  onApprove,
  onReject,
  onComplete,
}: Props) {
  return (
    <div className="overflow-hidden rounded-2xl border border-border">
      <Table>
        <TableHeader>
          <TableRow>
            <TableHead>Request</TableHead>

            <TableHead>Client</TableHead>

            <TableHead>Change Type</TableHead>

            <TableHead>Current Package</TableHead>

            <TableHead>Requested Package</TableHead>

            <TableHead>Status</TableHead>

            <TableHead>Amount Impact</TableHead>

            <TableHead className="w-[80px]" />
          </TableRow>
        </TableHeader>

        <TableBody>
          {changes.map((change) => (
            <TableRow key={change.id}>
              <TableCell>
                <div>
                  <p className="font-semibold">{change.requestNumber}</p>

                  <p className="text-sm text-muted-foreground">
                    {change.requestedAt}
                  </p>
                </div>
              </TableCell>

              <TableCell>{change.clientName}</TableCell>

              <TableCell>{change.changeType}</TableCell>

              <TableCell>{change.currentPackage}</TableCell>

              <TableCell>{change.requestedPackage}</TableCell>

              <TableCell>
                <StatusBadge status={change.status} />
              </TableCell>

              <TableCell>৳ {change.estimatedAmount.toLocaleString()}</TableCell>

              <TableCell>
                <SubscriptionChangesRowActions
                  change={change}
                  onApprove={onApprove}
                  onReject={onReject}
                  onComplete={onComplete}
                />
              </TableCell>
            </TableRow>
          ))}
        </TableBody>
      </Table>
    </div>
  );
}

function StatusBadge({ status }: { status: SubscriptionChange["status"] }) {
  switch (status) {
    case "Pending":
      return <Badge className="bg-amber-500/10 text-amber-600">Pending</Badge>;

    case "Approved":
      return <Badge className="bg-blue-500/10 text-blue-600">Approved</Badge>;

    case "Completed":
      return (
        <Badge className="bg-green-500/10 text-green-600">Completed</Badge>
      );

    case "Rejected":
      return <Badge className="bg-red-500/10 text-red-600">Rejected</Badge>;

    default:
      return <Badge>{status}</Badge>;
  }
}

export default SubscriptionChangesTable;
