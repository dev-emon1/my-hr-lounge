import { ChevronDown } from "lucide-react";

import { useEffect, useMemo, useState } from "react";

import { NavLink, useLocation } from "react-router-dom";

import { cn } from "@/shared/lib/utils";

import type { NavigationItem } from "@/shared/types/navigation.types";

import SidebarSubmenu from "./sidebar-submenu";

type Props = {
  item: NavigationItem;

  collapsed: boolean;
};

function SidebarMenuItem({ item, collapsed }: Props) {
  const location = useLocation();

  const [open, setOpen] = useState(false);

  const Icon = item.icon;

  const hasChildren = !!item.children?.length;

  const isActive = useMemo(() => {
    if (item.href && location.pathname === item.href) {
      return true;
    }

    return (
      item.children?.some((child) => child.href === location.pathname) || false
    );
  }, [item, location.pathname]);

  useEffect(() => {
    if (isActive) {
      setOpen(true);
    }
  }, [isActive]);

  if (hasChildren && item.children) {
    return (
      <div className="space-y-1">
        <button
          onClick={() => setOpen(!open)}
          className={cn(
            "group flex h-12 w-full items-center justify-between rounded-2xl px-4 transition-all duration-200",
            isActive
              ? "bg-primary text-primary-foreground shadow-lg shadow-primary/20"
              : "hover:bg-muted",
          )}
        >
          <div className="flex items-center gap-3">
            {Icon && <Icon size={18} />}

            {!collapsed && (
              <span className="text-sm font-semibold">{item.title}</span>
            )}
          </div>

          {!collapsed && (
            <ChevronDown
              size={16}
              className={cn(
                "transition-transform duration-200",
                open && "rotate-180",
              )}
            />
          )}
        </button>

        {!collapsed && (
          <div
            className={cn(
              "grid overflow-hidden transition-all duration-300 ease-in-out",
              open
                ? "grid-rows-[1fr] opacity-100"
                : "grid-rows-[0fr] opacity-0",
            )}
          >
            <div className="overflow-hidden">
              <SidebarSubmenu items={item.children} />
            </div>
          </div>
        )}
      </div>
    );
  }

  return (
    <NavLink
      to={item.href || "#"}
      className={({ isActive }) =>
        cn(
          "group flex h-12 items-center gap-3 rounded-2xl px-4 transition-all duration-200",
          isActive
            ? "bg-primary text-primary-foreground shadow-lg shadow-primary/20"
            : "hover:bg-muted",
        )
      }
    >
      {Icon && <Icon size={18} />}

      {!collapsed && (
        <span className="text-sm font-semibold">{item.title}</span>
      )}
    </NavLink>
  );
}

export default SidebarMenuItem;
