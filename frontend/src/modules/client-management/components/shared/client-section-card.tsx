import type { ReactNode } from "react";

import { cn } from "@/shared/lib/utils";

type Props = {
  children: ReactNode;

  className?: string;
};

function ClientSectionCard({ children, className }: Props) {
  return (
    <div
      className={cn(
        "rounded-[28px] border border-border bg-card/70 p-6 backdrop-blur-xl",
        className,
      )}
    >
      {children}
    </div>
  );
}

export default ClientSectionCard;
