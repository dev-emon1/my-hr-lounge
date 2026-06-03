import { cn } from "@/shared/lib/utils";

type Status = "active" | "trial" | "suspended" | "inactive";

type Props = {
  status: Status;
};

const statusStyles: Record<Status, string> = {
  active: "bg-emerald-500/10 text-emerald-400 border-emerald-500/20",

  trial: "bg-sky-500/10 text-sky-400 border-sky-500/20",

  suspended: "bg-red-500/10 text-red-400 border-red-500/20",

  inactive: "bg-muted text-muted-foreground border-border",
};

function ClientStatusBadge({ status }: Props) {
  return (
    <span
      className={cn(
        "inline-flex items-center rounded-full border px-3 py-1 text-xs font-semibold capitalize",
        statusStyles[status],
      )}
    >
      {status}
    </span>
  );
}

export default ClientStatusBadge;
