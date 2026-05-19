import type { ReactNode } from "react";

import { cn } from "@/shared/lib/utils";

type Props = {
  title: string;

  description?: string;

  children: ReactNode;

  className?: string;
};

function ChartContainer({ title, description, children, className }: Props) {
  return (
    <div
      className={cn(
        "rounded-3xl border border-border bg-card p-6 shadow-sm",

        className,
      )}
    >
      <div className="mb-8">
        <h3 className="text-xl font-bold">{title}</h3>

        {description && (
          <p className="text-sm text-muted-foreground">{description}</p>
        )}
      </div>

      {children}
    </div>
  );
}

export default ChartContainer;
