import { cn } from "@/shared/lib/utils";

type Props = {
  status: string;
};

function CompanyStatusBadge({ status }: Props) {
  return (
    <span
      className={cn(
        "rounded-full px-3 py-1 text-xs font-semibold capitalize",

        status === "active" && "bg-success/10 text-success",

        status === "pending" && "bg-warning/10 text-warning",

        status === "inactive" && "bg-destructive/10 text-destructive",
      )}
    >
      {status}
    </span>
  );
}

export default CompanyStatusBadge;
