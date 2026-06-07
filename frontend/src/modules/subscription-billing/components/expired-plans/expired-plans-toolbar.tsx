import { Download } from "lucide-react";

import SearchFilter from "@/shared/components/data-table/search-filter";

import { Button } from "@/shared/ui/button";

import {
  Select,
  SelectContent,
  SelectItem,
  SelectTrigger,
  SelectValue,
} from "@/shared/ui/select";

function ExpiredPlansToolbar() {
  return (
    <div className="flex flex-col gap-4 xl:flex-row xl:items-center xl:justify-between">
      <div className="flex flex-1 flex-col gap-4 lg:flex-row">
        <SearchFilter placeholder="Search expired subscriptions..." />

        <Select>
          <SelectTrigger className="h-12 w-full rounded-2xl lg:w-[180px]">
            <SelectValue placeholder="Package" />
          </SelectTrigger>

          <SelectContent>
            <SelectItem value="starter">Starter</SelectItem>
            <SelectItem value="growth">Growth</SelectItem>
            <SelectItem value="enterprise">Enterprise</SelectItem>
          </SelectContent>
        </Select>

        <Select>
          <SelectTrigger className="h-12 w-full rounded-2xl lg:w-[180px]">
            <SelectValue placeholder="Status" />
          </SelectTrigger>

          <SelectContent>
            <SelectItem value="expired">Expired</SelectItem>
            <SelectItem value="suspended">Suspended</SelectItem>
            <SelectItem value="grace-period">Grace Period</SelectItem>
          </SelectContent>
        </Select>
      </div>

      <Button variant="outline" className="h-12 rounded-2xl">
        <Download size={18} />
        Export
      </Button>
    </div>
  );
}

export default ExpiredPlansToolbar;
