import { NavLink } from "react-router-dom";

import { cn } from "@/shared/lib/utils";

import type { NavigationItem } from "@/shared/types/navigation.types";

type Props = {
  item: NavigationItem;
};

function SidebarSubmenuItem({ item }: Props) {
  const Icon = item.icon;

  return (
    <NavLink
      to={item.href || "#"}
      className={({ isActive }) =>
        cn(
          "group flex h-11 items-center gap-3 rounded-xl px-3 text-sm font-medium transition-all duration-200",
          isActive
            ? "bg-primary/10 text-primary shadow-sm"
            : "text-muted-foreground hover:bg-muted hover:text-foreground",
        )
      }
    >
      {Icon && <Icon size={16} className="opacity-80" />}

      <span>{item.title}</span>
    </NavLink>
  );
}

export default SidebarSubmenuItem;
