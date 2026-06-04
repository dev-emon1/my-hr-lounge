import type { HTMLAttributes } from "react";

import { cn } from "@/shared/lib/utils";

type BadgeVariant =
  | "default"
  | "secondary"
  | "success"
  | "warning"
  | "destructive"
  | "outline";

type Props = HTMLAttributes<HTMLDivElement> & {
  variant?: BadgeVariant;
};

const badgeVariants: Record<BadgeVariant, string> = {
  default: "border-primary/20 bg-primary/10 text-primary",

  secondary: "border-slate-200 bg-slate-100 text-slate-700",

  success: "border-green-200 bg-green-100 text-green-700",

  warning: "border-amber-200 bg-amber-100 text-amber-700",

  destructive: "border-red-200 bg-red-100 text-red-700",

  outline: "border-border bg-transparent text-foreground",
};

function Badge({ className, variant = "default", ...props }: Props) {
  return (
    <div
      className={cn(
        "inline-flex items-center rounded-full border px-3 py-1 text-xs font-semibold",
        badgeVariants[variant],
        className,
      )}
      {...props}
    />
  );
}

export { Badge };
