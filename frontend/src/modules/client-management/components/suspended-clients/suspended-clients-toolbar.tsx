import { Search } from "lucide-react";

import { Input } from "@/shared/ui/input";

import {
  Select,
  SelectContent,
  SelectItem,
  SelectTrigger,
  SelectValue,
} from "@/shared/ui/select";

function SuspendedClientsToolbar() {
  return (
    <div className="flex flex-col gap-4 lg:flex-row">
      <div className="relative flex-1">
        <Search
          size={18}
          className="absolute left-4 top-1/2 -translate-y-1/2 text-muted-foreground"
        />

        <Input
          placeholder="Search suspended clients..."
          className="h-12 rounded-2xl pl-11"
        />
      </div>

      <Select>
        <SelectTrigger className="h-12 w-full rounded-2xl lg:w-[220px]">
          <SelectValue placeholder="Suspension Type" />
        </SelectTrigger>

        <SelectContent>
          <SelectItem value="temporary">Temporary</SelectItem>

          <SelectItem value="permanent">Permanent</SelectItem>
        </SelectContent>
      </Select>
    </div>
  );
}

export default SuspendedClientsToolbar;
