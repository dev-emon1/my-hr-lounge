import { Download } from "lucide-react";
import { Plus } from "lucide-react";

import { useNavigate } from "react-router-dom";

import SearchFilter from "@/shared/components/data-table/search-filter";
import { Button } from "@/shared/ui/button";
import {
  Select,
  SelectContent,
  SelectItem,
  SelectTrigger,
  SelectValue,
} from "@/shared/ui/select";

function QuotationsToolbar() {
  const navigate = useNavigate();
  return (
    <div className="flex flex-col gap-4 xl:flex-row xl:items-center xl:justify-between">
      <div className="flex flex-1 flex-col gap-4 lg:flex-row">
        <SearchFilter placeholder="Search quotations..." />

        <Select>
          <SelectTrigger className="h-12 w-full rounded-2xl lg:w-[180px]">
            <SelectValue placeholder="Status" />
          </SelectTrigger>

          <SelectContent>
            <SelectItem value="draft">Draft</SelectItem>

            <SelectItem value="sent">Sent</SelectItem>

            <SelectItem value="approved">Approved</SelectItem>

            <SelectItem value="rejected">Rejected</SelectItem>

            <SelectItem value="expired">Expired</SelectItem>
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

      <div className="flex gap-3">
        <Button
          onClick={() => navigate("/billing/quotations/create")}
          className="h-12 rounded-2xl"
        >
          <Plus size={18} />
          New Quotation
        </Button>

        <Button variant="outline" className="h-12 rounded-2xl">
          <Download size={18} />
          Export
        </Button>
      </div>
    </div>
  );
}

export default QuotationsToolbar;
