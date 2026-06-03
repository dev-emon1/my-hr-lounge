import { cn } from "@/shared/lib/utils";

type Props = {
  orientation?: "horizontal" | "vertical";

  className?: string;
};

function Separator({
  orientation = "horizontal",

  className,
}: Props) {
  return (
    <div
      className={cn(
        "shrink-0 bg-border",
        orientation === "horizontal" ? "h-px w-full" : "h-full w-px",
        className,
      )}
    />
  );
}

export { Separator };
