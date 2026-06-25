import { ChangeEvent } from "react";

import { Search } from "lucide-react";

import { Input } from "@/shared/ui/input";

type Props = {
  placeholder?: string;

  value?: string;

  onChange?: (e: ChangeEvent<HTMLInputElement>) => void;
};

function SearchFilter({ placeholder = "Search...", value, onChange }: Props) {
  return (
    <div className="relative w-full xl:max-w-md">
      <Search
        size={18}
        className="absolute left-4 top-1/2 -translate-y-1/2 text-muted-foreground"
      />

      <Input
        value={value}
        onChange={onChange}
        placeholder={placeholder}
        className="h-12 rounded-2xl pl-11"
      />
    </div>
  );
}

export default SearchFilter;
