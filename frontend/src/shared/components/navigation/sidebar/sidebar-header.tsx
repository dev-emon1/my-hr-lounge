import { PanelLeftClose, PanelLeftOpen } from "lucide-react";

import { Button } from "@/shared/ui/button";

import { cn } from "@/shared/lib/utils";

type Props = {
  collapsed: boolean;

  toggleSidebar: () => void;
};

function SidebarHeader({ collapsed, toggleSidebar }: Props) {
  return (
    <div className="flex h-20 items-center justify-between border-b border-border px-5">
      <div
        className={cn("transition-all duration-300", collapsed && "opacity-0")}
      >
        {!collapsed && (
          <>
            <h1 className="text-2xl font-black tracking-tight text-primary">
              A&A
            </h1>

            <p className="text-xs font-medium uppercase tracking-[0.2em] text-muted-foreground">
              HR Lounge
            </p>
          </>
        )}
      </div>

      <Button
        size="icon"
        variant="ghost"
        onClick={toggleSidebar}
        className="rounded-xl"
      >
        {collapsed ? <PanelLeftOpen size={18} /> : <PanelLeftClose size={18} />}
      </Button>
    </div>
  );
}

export default SidebarHeader;
