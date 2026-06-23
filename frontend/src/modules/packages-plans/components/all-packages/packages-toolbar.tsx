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
import { useNavigate } from "react-router-dom";

function PackagesToolbar() {
  const navigate = useNavigate();
  return (
    <div className="flex flex-col gap-4 xl:flex-row xl:items-center xl:justify-between">
      <div className="flex flex-1 flex-col gap-4 lg:flex-row">
        <SearchFilter placeholder="Search packages..." />

        <Select>
          <SelectTrigger className="h-12 w-full rounded-2xl lg:w-[180px]">
            <SelectValue placeholder="Status" />
          </SelectTrigger>

          <SelectContent>
            <SelectItem value="active">Active</SelectItem>

            <SelectItem value="draft">Draft</SelectItem>

            <SelectItem value="archived">Archived</SelectItem>
          </SelectContent>
        </Select>

        <Select>
          <SelectTrigger className="h-12 w-full rounded-2xl lg:w-[180px]">
            <SelectValue placeholder="Trial" />
          </SelectTrigger>

          <SelectContent>
            <SelectItem value="available">Trial Available</SelectItem>

            <SelectItem value="not-available">No Trial</SelectItem>
          </SelectContent>
        </Select>
      </div>

      <Button
        className="h-12 rounded-2xl"
        onClick={() => navigate("/packages-plans/package-builder/create")}
      >
        Create Package
      </Button>
      <Button variant="outline" className="h-12 rounded-2xl">
        <Download size={18} />
        Export
      </Button>
    </div>
  );
}

export default PackagesToolbar;
