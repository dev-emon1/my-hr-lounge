import { Search } from "lucide-react";

function SidebarSearch() {
  return (
    <div className="px-4 pb-2 pt-4">
      <button className="flex h-11 w-full items-center gap-3 rounded-2xl border border-border bg-background px-4 text-sm text-muted-foreground transition-all hover:bg-muted">
        <Search size={16} />

        <span>Search menu...</span>

        <div className="ml-auto rounded-md border border-border bg-card px-2 py-0.5 text-[10px] font-semibold">
          ⌘K
        </div>
      </button>
    </div>
  );
}

export default SidebarSearch;
