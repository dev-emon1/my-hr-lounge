import { Bell, Command, Menu, Search } from "lucide-react";

import { Button } from "@/shared/ui/button";

import ThemeToggle from "@/shared/components/theme-toggle";

import { useSidebarStore } from "@/app/store/zustand/sidebar-store";

import { useCommandStore } from "@/app/store/zustand/command-store";

import AppBreadcrumbs from "./app-breadcrumbs";

function DashboardHeader() {
  const { setMobileOpen } = useSidebarStore();

  const { setOpen } = useCommandStore();

  return (
    <header className="sticky top-0 z-40 flex h-20 items-center justify-between border-b border-border bg-background/80 px-4 backdrop-blur-xl md:px-6">
      <div className="flex items-center gap-4">
        <Button
          size="icon"
          variant="ghost"
          className="rounded-xl lg:hidden"
          onClick={() => setMobileOpen(true)}
        >
          <Menu size={20} />
        </Button>

        <div>
          <AppBreadcrumbs />

          <p className="mt-1 hidden text-sm text-muted-foreground md:block">
            Enterprise HR Management Platform
          </p>
        </div>
      </div>

      <div className="flex items-center gap-3">
        <button
          onClick={() => setOpen(true)}
          className="hidden h-11 items-center gap-3 rounded-2xl border border-border bg-card px-4 text-sm text-muted-foreground transition-all hover:bg-muted lg:flex"
        >
          <Search size={16} />

          <span>Search anything...</span>

          <div className="flex items-center gap-1 rounded-lg border border-border bg-background px-2 py-1 text-xs">
            <Command size={12} />

            <span>K</span>
          </div>
        </button>

        <ThemeToggle />

        <Button size="icon" variant="ghost" className="rounded-xl">
          <Bell size={18} />
        </Button>
      </div>
    </header>
  );
}

export default DashboardHeader;
