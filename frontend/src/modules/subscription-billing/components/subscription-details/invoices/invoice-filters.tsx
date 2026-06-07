import { Search } from "lucide-react";

import { Input } from "@/shared/ui/input";

import {
  Select,
  SelectContent,
  SelectItem,
  SelectTrigger,
  SelectValue,
} from "@/shared/ui/select";

function InvoiceFilters() {
  return (
    <div className="flex flex-col gap-4 lg:flex-row">
      <div className="relative flex-1">
        <Search
          size={18}
          className="absolute left-4 top-1/2 -translate-y-1/2 text-muted-foreground"
        />

        <Input placeholder="Search invoice..." className="pl-11" />
      </div>

      <Select>
        <SelectTrigger className="w-full lg:w-[180px]">
          <SelectValue placeholder="Status" />
        </SelectTrigger>

        <SelectContent>
          <SelectItem value="paid">Paid</SelectItem>

          <SelectItem value="pending">Pending</SelectItem>

          <SelectItem value="overdue">Overdue</SelectItem>
        </SelectContent>
      </Select>
    </div>
  );
}

export default InvoiceFilters;
