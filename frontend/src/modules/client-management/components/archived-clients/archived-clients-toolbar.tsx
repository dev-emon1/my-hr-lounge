import { Search } from "lucide-react";

import { Input } from "@/shared/ui/input";

function ArchivedClientsToolbar() {
  return (
    <div className="relative max-w-md">
      <Search
        size={18}
        className="absolute left-4 top-1/2 -translate-y-1/2 text-muted-foreground"
      />

      <Input
        placeholder="Search archived clients..."
        className="h-12 rounded-2xl pl-11"
      />
    </div>
  );
}

export default ArchivedClientsToolbar;
