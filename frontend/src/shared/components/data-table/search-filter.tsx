import { Search } from "lucide-react";

import { Input } from "@/shared/ui/input";

type Props = {
  placeholder?: string;
};

function SearchFilter({ placeholder = "Search..." }: Props) {
  return (
    <div className="relative w-full xl:max-w-md">
      <Search
        size={18}
        className="absolute left-4 top-1/2 -translate-y-1/2 text-muted-foreground"
      />

      <Input placeholder={placeholder} className="h-12 rounded-2xl pl-11" />
    </div>
  );
}

export default SearchFilter;
