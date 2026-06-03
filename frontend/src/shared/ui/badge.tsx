import type { HTMLAttributes } from "react";

import { cn } from "@/shared/lib/utils";

type Props = HTMLAttributes<HTMLDivElement>;

function Badge({ className, ...props }: Props) {
  return (
    <div
      className={cn(
        "inline-flex items-center rounded-full border px-3 py-1 text-xs font-semibold",
        className,
      )}
      {...props}
    />
  );
}

export { Badge };
