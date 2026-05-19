import { create } from "zustand";

type SidebarStore = {
  collapsed: boolean;

  mobileOpen: boolean;

  toggleSidebar: () => void;

  setMobileOpen: (open: boolean) => void;
};

export const useSidebarStore = create<SidebarStore>((set) => ({
  collapsed: false,

  mobileOpen: false,

  toggleSidebar: () =>
    set((state) => ({
      collapsed: !state.collapsed,
    })),

  setMobileOpen: (open) =>
    set({
      mobileOpen: open,
    }),
}));
