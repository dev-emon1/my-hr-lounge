import { Plus, Search } from "lucide-react";

import { Button } from "@/shared/ui/button";

import { Input } from "@/shared/ui/input";

import {
  Select,
  SelectContent,
  SelectItem,
  SelectTrigger,
  SelectValue,
} from "@/shared/ui/select";

function ClientsToolbar() {
  return (
    <div className="flex flex-col gap-4 xl:flex-row xl:items-center xl:justify-between">
      {/* LEFT */}
      <div className="flex flex-1 flex-col gap-4 md:flex-row">
        {/* SEARCH */}
        <div className="relative w-full xl:max-w-md">
          <Search
            size={18}
            className="absolute left-4 top-1/2 -translate-y-1/2 text-muted-foreground"
          />

          <Input
            placeholder="Search clients..."
            className="h-12 rounded-2xl pl-11"
          />
        </div>

        {/* STATUS */}
        <Select>
          <SelectTrigger className="h-12 w-full rounded-2xl md:w-[180px]">
            <SelectValue placeholder="Status" />
          </SelectTrigger>

          <SelectContent>
            <SelectItem value="all">All Status</SelectItem>

            <SelectItem value="active">Active</SelectItem>

            <SelectItem value="trial">Trial</SelectItem>

            <SelectItem value="suspended">Suspended</SelectItem>
          </SelectContent>
        </Select>

        {/* PACKAGE */}
        <Select>
          <SelectTrigger className="h-12 w-full rounded-2xl md:w-[180px]">
            <SelectValue placeholder="Package" />
          </SelectTrigger>

          <SelectContent>
            <SelectItem value="all">All Packages</SelectItem>

            <SelectItem value="starter">Starter</SelectItem>

            <SelectItem value="growth">Growth</SelectItem>

            <SelectItem value="enterprise">Enterprise</SelectItem>
          </SelectContent>
        </Select>
      </div>

      {/* RIGHT */}
      <Button className="h-12 rounded-2xl px-6 text-sm font-semibold">
        <Plus size={18} />
        Create Client
      </Button>
    </div>
  );
}

export default ClientsToolbar;
