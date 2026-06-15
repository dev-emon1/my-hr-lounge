import { Search, Download } from "lucide-react";

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

function SubscriptionChangesToolbar() {
  return (
    <div className="flex flex-col gap-4 xl:flex-row xl:items-center xl:justify-between">
      <div className="flex flex-1 flex-col gap-4 lg:flex-row">
        <SearchFilter placeholder="Search requests..." />

        <Select>
          <SelectTrigger className="w-[180px]">
            <SelectValue placeholder="All Status" />
          </SelectTrigger>

          <SelectContent>
            <SelectItem value="all">All Status</SelectItem>

            <SelectItem value="pending">Pending</SelectItem>

            <SelectItem value="approved">Approved</SelectItem>

            <SelectItem value="rejected">Rejected</SelectItem>

            <SelectItem value="completed">Completed</SelectItem>
          </SelectContent>
        </Select>

        <Select>
          <SelectTrigger className="w-[180px]">
            <SelectValue placeholder="All Types" />
          </SelectTrigger>

          <SelectContent>
            <SelectItem value="all">All Types</SelectItem>

            <SelectItem value="upgrade">Upgrade</SelectItem>

            <SelectItem value="downgrade">Downgrade</SelectItem>

            <SelectItem value="addon-purchase">Addon Purchase</SelectItem>

            <SelectItem value="addon-removal">Addon Removal</SelectItem>
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

export default SubscriptionChangesToolbar;
