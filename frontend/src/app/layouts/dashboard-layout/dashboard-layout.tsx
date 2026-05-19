import { useEffect } from "react";

import { Outlet } from "react-router-dom";

import CommandMenu from "@/shared/components/command/command-menu";

import { MobileSidebar, Sidebar } from "@/shared/components/navigation/sidebar";

import { useCommandStore } from "@/app/store/zustand/command-store";

import DashboardContent from "./dashboard-content";

import DashboardHeader from "./dashboard-header";

function DashboardLayout() {
  const { setOpen } = useCommandStore();

  useEffect(() => {
    const down = (e: KeyboardEvent) => {
      if ((e.metaKey || e.ctrlKey) && e.key === "k") {
        e.preventDefault();

        setOpen(true);
      }
    };

    document.addEventListener("keydown", down);

    return () => document.removeEventListener("keydown", down);
  }, [setOpen]);

  return (
    <div className="flex h-screen bg-background">
      <Sidebar />

      <MobileSidebar />

      <div className="flex min-w-0 flex-1 flex-col">
        <DashboardHeader />

        <DashboardContent>
          <Outlet />
        </DashboardContent>

        <CommandMenu />
      </div>
    </div>
  );
}

export default DashboardLayout;
