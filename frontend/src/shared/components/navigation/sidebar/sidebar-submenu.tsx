import type { NavigationItem } from "@/shared/types/navigation.types";

import SidebarSubmenuItem from "./sidebar-submenu-item";

type Props = {
  items: NavigationItem[];
};

function SidebarSubmenu({ items }: Props) {
  return (
    <div className="ml-5 mt-2 space-y-1 border-l border-border pl-4">
      {items.map((item) => (
        <SidebarSubmenuItem key={item.title} item={item} />
      ))}
    </div>
  );
}

export default SidebarSubmenu;
