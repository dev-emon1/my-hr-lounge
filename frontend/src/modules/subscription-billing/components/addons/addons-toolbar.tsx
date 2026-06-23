import { Plus, Search } from "lucide-react";

import { Button } from "@/shared/ui/button";
import { Input } from "@/shared/ui/input";
import SearchFilter from "@/shared/components/data-table/search-filter";

type Props = {
  onCreateAddon: () => void;
};

function AddonsToolbar({ onCreateAddon }: Props) {
  return (
    <div className="flex flex-col gap-4 lg:flex-row lg:items-center lg:justify-between">
      <SearchFilter placeholder="Search requests..." />

      <Button onClick={onCreateAddon}>
        <Plus size={16} />
        Create Addon
      </Button>
    </div>
  );
}

export default AddonsToolbar;
