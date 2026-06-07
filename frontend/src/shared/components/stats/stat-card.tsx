import type { ReactNode } from "react";

import { cn } from "@/shared/lib/utils";

type Variant = "info" | "success" | "warning" | "danger";

type Props = {
  title: string;

  value: string | number;

  description?: string;

  icon?: ReactNode;

  variant?: Variant;
};

const variants = {
  info: {
    iconWrapper: "bg-primary/10 text-primary",
  },

  success: {
    iconWrapper: "bg-green-500/10 text-green-600",
  },

  warning: {
    iconWrapper: "bg-amber-500/10 text-amber-600",
  },

  danger: {
    iconWrapper: "bg-red-500/10 text-red-600",
  },
};

function StatCard({
  title,
  value,
  description,
  icon,
  variant = "info",
}: Props) {
  const currentVariant = variants[variant];

  return (
    <div className="rounded-[28px] border border-border bg-card p-6 shadow-lg">
      <div className="flex items-start justify-between gap-4">
        <div className="min-w-0 flex-1">
          <p className="text-base text-muted-foreground">{title}</p>

          <h3 className="mt-4 text-3xl font-black tracking-tight">{value}</h3>

          {description && (
            <p className="mt-3 text-sm text-muted-foreground">{description}</p>
          )}
        </div>

        {icon && (
          <div
            className={cn(
              "flex h-18 w-18 shrink-0 items-center justify-center rounded-3xl",
              currentVariant.iconWrapper,
            )}
          >
            {icon}
          </div>
        )}
      </div>
    </div>
  );
}

export default StatCard;
