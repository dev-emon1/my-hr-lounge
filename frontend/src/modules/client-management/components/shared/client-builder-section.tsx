import { useState } from "react";

import { ChevronDown, CheckCircle2 } from "lucide-react";

import { cn } from "@/shared/lib/utils";

type Props = {
  title: string;

  description: string;

  children: React.ReactNode;

  defaultOpen?: boolean;

  completed?: boolean;
};

function ClientBuilderSection({
  title,

  description,

  children,

  defaultOpen = true,

  completed = false,
}: Props) {
  const [open, setOpen] = useState(defaultOpen);

  return (
    <div
      className={cn(
        "overflow-hidden rounded-[32px] border bg-card/60 shadow-2xl backdrop-blur-xl transition-all duration-300",
        open ? "border-primary/40" : "border-border",
      )}
    >
      {/* HEADER */}
      <button
        type="button"
        onClick={() => setOpen(!open)}
        className="flex w-full items-center justify-between p-8 text-left"
      >
        <div className="flex items-start gap-4">
          {completed ? (
            <div className="mt-1 text-green-500">
              <CheckCircle2 size={22} />
            </div>
          ) : (
            <div className="mt-1 h-3 w-3 rounded-full bg-primary shadow-[0_0_20px_hsl(var(--primary))]" />
          )}

          <div>
            <h2 className="text-2xl font-black tracking-tight">{title}</h2>

            <p className="mt-2 text-muted-foreground">{description}</p>
          </div>
        </div>

        <div
          className={cn(
            "transition-transform duration-300",
            open && "rotate-180",
          )}
        >
          <ChevronDown size={24} />
        </div>
      </button>

      {/* CONTENT */}
      <div
        className={cn(
          "grid transition-all duration-300",
          open ? "grid-rows-[1fr]" : "grid-rows-[0fr]",
        )}
      >
        <div className="overflow-hidden">
          <div className="px-8 pb-8">{children}</div>
        </div>
      </div>
    </div>
  );
}

export default ClientBuilderSection;
