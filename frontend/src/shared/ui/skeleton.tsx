import { cn } from "@/shared/lib/utils";

type Props = {
  className?: string;
};

function Skeleton({ className }: Props) {
  return <div className={cn("animate-pulse rounded-xl bg-muted", className)} />;
}

export { Skeleton };
