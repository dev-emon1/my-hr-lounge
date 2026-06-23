import { Download } from "lucide-react";

import { Button } from "@/shared/ui/button";

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
          <SelectTrigger className="h-12 w-full rounded-2xl lg:w-[180px]">
            <SelectValue placeholder="Status" />
          </SelectTrigger>

          <SelectContent>
            <SelectItem value="pending">Pending</SelectItem>

            <SelectItem value="approved">Approved</SelectItem>

            <SelectItem value="completed">Completed</SelectItem>

            <SelectItem value="rejected">Rejected</SelectItem>
          </SelectContent>
        </Select>

        <Select>
          <SelectTrigger className="h-12 w-full rounded-2xl lg:w-[220px]">
            <SelectValue placeholder="Change Type" />
          </SelectTrigger>

          <SelectContent>
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
