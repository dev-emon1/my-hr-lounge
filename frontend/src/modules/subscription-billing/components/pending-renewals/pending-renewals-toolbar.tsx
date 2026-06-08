import { Download } from "lucide-react";

import { Button } from "@/shared/ui/button";
import { Input } from "@/shared/ui/input";

import {
  Select,
  SelectContent,
  SelectItem,
  SelectTrigger,
  SelectValue,
} from "@/shared/ui/select";
import SearchFilter from "@/shared/components/data-table/search-filter";

function PendingRenewalsToolbar() {
  return (
    <div className="flex flex-col gap-4 lg:flex-row lg:items-center lg:justify-between">
      <div className="flex flex-1 flex-col gap-4 md:flex-row">
        <SearchFilter placeholder="Search clients..." />

        <Select>
          <SelectTrigger className="h-12 w-full rounded-2xl lg:w-[180px]">
            <SelectValue placeholder="Status" />
          </SelectTrigger>

          <SelectContent>
            <SelectItem value="today">Due Today</SelectItem>

            <SelectItem value="week">Due This Week</SelectItem>

            <SelectItem value="overdue">Overdue</SelectItem>
          </SelectContent>
        </Select>

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
      </div>

      <Button variant="outline" className="h-12 rounded-2xl">
        <Download size={16} />
        Export
      </Button>
    </div>
  );
}

export default PendingRenewalsToolbar;
