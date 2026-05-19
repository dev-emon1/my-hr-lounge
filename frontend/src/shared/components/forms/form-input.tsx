import type { InputHTMLAttributes } from "react";

import { cn } from "@/shared/lib/utils";

type Props = InputHTMLAttributes<HTMLInputElement>;

function FormInput({ className, ...props }: Props) {
  return (
    <input
      {...props}
      className={cn(
        "h-12 w-full rounded-2xl border border-input bg-background px-4 text-sm outline-none transition-all focus:border-primary focus:ring-4 focus:ring-primary/10",

        className,
      )}
    />
  );
}

export default FormInput;
