import type { LucideIcon } from "lucide-react";

import { cn } from "@/shared/lib/utils";

type Props = {
  title: string;

  value: string;

  description: string;

  icon: LucideIcon;

  trend?: string;

  className?: string;
};

function StatsCard({
  title,
  value,
  description,
  icon: Icon,
  trend,
  className,
}: Props) {
  return (
    <div
      className={cn(
        "rounded-3xl border border-border bg-card p-6 shadow-sm transition-all duration-300 hover:-translate-y-1 hover:shadow-xl",

        className,
      )}
    >
      <div className="flex items-start justify-between">
        <div>
          <p className="text-sm font-medium text-muted-foreground">{title}</p>

          <h3 className="mt-3 text-4xl font-black tracking-tight">{value}</h3>

          <p className="mt-2 text-sm text-muted-foreground">{description}</p>
        </div>

        <div className="flex h-14 w-14 items-center justify-center rounded-2xl bg-primary/10 text-primary">
          <Icon size={28} />
        </div>
      </div>

      {trend && (
        <div className="mt-6">
          <span className="rounded-full bg-success/10 px-3 py-1 text-xs font-semibold text-success">
            {trend}
          </span>
        </div>
      )}
    </div>
  );
}

export default StatsCard;
