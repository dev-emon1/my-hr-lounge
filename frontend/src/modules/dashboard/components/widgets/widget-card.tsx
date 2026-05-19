import type { ReactNode } from "react";

import { cn } from "@/shared/lib/utils";

type Props = {
  children: ReactNode;

  className?: string;
};

function WidgetCard({ children, className }: Props) {
  return (
    <div
      className={cn(
        "rounded-3xl border border-border bg-card p-6 shadow-sm transition-all duration-300 hover:shadow-lg",
        className,
      )}
    >
      {children}
    </div>
  );
}

export default WidgetCard;
