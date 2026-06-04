import { Badge } from "@/shared/ui/badge";

type Props = {
  status: string;
};

function StatusBadge({ status }: Props) {
  const variant =
    status === "Active"
      ? "success"
      : status === "Pending"
        ? "warning"
        : status === "Expired"
          ? "destructive"
          : "secondary";

  return <Badge variant={variant}>{status}</Badge>;
}

export default StatusBadge;
