import { superAdminNavigation } from "@/shared/constants/navigation";

import SidebarGroupLabel from "./sidebar-group-label";

import SidebarMenuItem from "./sidebar-menu-item";

type Props = {
  collapsed: boolean;
};

function SidebarMenu({ collapsed }: Props) {
  return (
    <div className="space-y-2">
      {superAdminNavigation.map((group) => (
        <div key={group.title}>
          {!collapsed && <SidebarGroupLabel title={group.title} />}

          <div className="space-y-1">
            {group.items.map((item) => (
              <SidebarMenuItem
                key={item.title}
                item={item}
                collapsed={collapsed}
              />
            ))}
          </div>
        </div>
      ))}
    </div>
  );
}

export default SidebarMenu;
