import { Drawer } from "vaul";

import { useSidebarStore } from "@/app/store/zustand/sidebar-store";

import SidebarContent from "./sidebar-content";

import SidebarHeader from "./sidebar-header";

import SidebarMenu from "./sidebar-menu";

import SidebarProfile from "./sidebar-profile";

import SidebarSearch from "./sidebar-search";

function MobileSidebar() {
  const {
    mobileOpen,

    setMobileOpen,
  } = useSidebarStore();

  return (
    <Drawer.Root
      open={mobileOpen}
      onOpenChange={setMobileOpen}
      direction="left"
    >
      <Drawer.Portal>
        <Drawer.Overlay className="fixed inset-0 z-40 bg-black/50 backdrop-blur-sm lg:hidden" />

        <Drawer.Content className="fixed bottom-0 left-0 top-0 z-50 flex w-[320px] flex-col border-r border-border bg-card">
          <SidebarHeader
            collapsed={false}
            toggleSidebar={() => setMobileOpen(false)}
          />

          <SidebarSearch />

          <SidebarContent>
            <SidebarMenu collapsed={false} />
          </SidebarContent>

          <SidebarProfile collapsed={false} />
        </Drawer.Content>
      </Drawer.Portal>
    </Drawer.Root>
  );
}

export default MobileSidebar;
