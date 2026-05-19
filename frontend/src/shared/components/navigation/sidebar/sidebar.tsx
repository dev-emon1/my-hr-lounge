import { cn } from "@/shared/lib/utils";

import { useSidebarStore } from "@/app/store/zustand/sidebar-store";

import SidebarContent from "./sidebar-content";

// import SidebarFooter from "./sidebar-footer";

import SidebarHeader from "./sidebar-header";

import SidebarMenu from "./sidebar-menu";

import SidebarProfile from "./sidebar-profile";

import SidebarSearch from "./sidebar-search";

function Sidebar() {
  const {
    collapsed,

    toggleSidebar,
  } = useSidebarStore();

  return (
    <aside
      className={cn(
        "sticky top-0 hidden h-screen shrink-0 border-r border-sidebar-border bg-sidebar/95 backdrop-blur-xl lg:flex lg:flex-col",
        collapsed ? "w-24" : "w-[320px]",
      )}
    >
      <SidebarHeader collapsed={collapsed} toggleSidebar={toggleSidebar} />

      {!collapsed && <SidebarSearch />}

      <SidebarContent>
        <SidebarMenu collapsed={collapsed} />
      </SidebarContent>

      {/* {!collapsed && <SidebarFooter />} */}

      <SidebarProfile collapsed={collapsed} />
    </aside>
  );
}

export default Sidebar;
