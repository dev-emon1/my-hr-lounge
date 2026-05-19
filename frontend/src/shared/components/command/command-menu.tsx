import { Command } from "cmdk";

import { Building2, LayoutDashboard, Users } from "lucide-react";

import { useNavigate } from "react-router-dom";

import { useCommandStore } from "@/app/store/zustand/command-store";

function CommandMenu() {
  const navigate = useNavigate();

  const { open, setOpen } = useCommandStore();

  return (
    <Command.Dialog
      open={open}
      onOpenChange={setOpen}
      label="Global Command Menu"
      className="fixed left-1/2 top-24 z-50 w-full max-w-2xl -translate-x-1/2 overflow-hidden rounded-3xl border border-border bg-card shadow-2xl"
    >
      <div className="border-b border-border px-4">
        <Command.Input
          placeholder="Search modules, pages, employees..."
          className="h-14 w-full bg-transparent outline-none"
        />
      </div>

      <Command.List className="max-h-[420px] overflow-y-auto p-3">
        <Command.Empty className="p-6 text-center text-sm text-muted-foreground">
          No results found.
        </Command.Empty>

        <Command.Group heading="Navigation">
          <Command.Item
            onSelect={() => {
              navigate("/");

              setOpen(false);
            }}
            className="flex cursor-pointer items-center gap-3 rounded-2xl px-4 py-3 transition-colors hover:bg-muted"
          >
            <LayoutDashboard size={18} />
            Dashboard
          </Command.Item>

          <Command.Item
            onSelect={() => {
              navigate("/companies");

              setOpen(false);
            }}
            className="flex cursor-pointer items-center gap-3 rounded-2xl px-4 py-3 transition-colors hover:bg-muted"
          >
            <Building2 size={18} />
            Companies
          </Command.Item>

          <Command.Item className="flex cursor-pointer items-center gap-3 rounded-2xl px-4 py-3 transition-colors hover:bg-muted">
            <Users size={18} />
            Employees
          </Command.Item>
        </Command.Group>
      </Command.List>
    </Command.Dialog>
  );
}

export default CommandMenu;
