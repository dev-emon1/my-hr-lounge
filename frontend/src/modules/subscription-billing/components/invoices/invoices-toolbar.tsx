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

function InvoicesToolbar() {
  return (
    <div className="flex flex-col gap-4 xl:flex-row xl:items-center xl:justify-between">
      <div className="flex flex-1 flex-col gap-4 lg:flex-row">
        <SearchFilter placeholder="Search invoices..." />

        <Select>
          <SelectTrigger className="h-12 w-full rounded-2xl lg:w-[180px]">
            <SelectValue placeholder="Status" />
          </SelectTrigger>

          <SelectContent>
            <SelectItem value="draft">Draft</SelectItem>

            <SelectItem value="pending">Pending</SelectItem>

            <SelectItem value="paid">Paid</SelectItem>

            <SelectItem value="overdue">Overdue</SelectItem>

            <SelectItem value="cancelled">Cancelled</SelectItem>
          </SelectContent>
        </Select>

        <Select>
          <SelectTrigger className="h-12 w-full rounded-2xl lg:w-[180px]">
            <SelectValue placeholder="Invoice Type" />
          </SelectTrigger>

          <SelectContent>
            <SelectItem value="renewal">Renewal</SelectItem>

            <SelectItem value="upgrade">Upgrade</SelectItem>

            <SelectItem value="addon">Addon</SelectItem>

            <SelectItem value="custom">Custom</SelectItem>
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

export default InvoicesToolbar;
