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

function TrialPlansToolbar() {
  const navigate = useNavigate();

  return (
    <div className="flex flex-col gap-4 xl:flex-row xl:items-center xl:justify-between">
      <div className="flex flex-1 flex-col gap-4 lg:flex-row">
        <SearchFilter placeholder="Search trial plans..." />

        <Select>
          <SelectTrigger className="h-12 w-full rounded-2xl lg:w-[180px]">
            <SelectValue placeholder="Status" />
          </SelectTrigger>

          <SelectContent>
            <SelectItem value="active">Active</SelectItem>

            <SelectItem value="inactive">Inactive</SelectItem>
          </SelectContent>
        </Select>

        <Select>
          <SelectTrigger className="h-12 w-full rounded-2xl lg:w-[180px]">
            <SelectValue placeholder="Duration" />
          </SelectTrigger>

          <SelectContent>
            <SelectItem value="7">7 Days</SelectItem>

            <SelectItem value="14">14 Days</SelectItem>

            <SelectItem value="30">30 Days</SelectItem>
          </SelectContent>
        </Select>
      </div>

      <Button
        className="h-12 rounded-2xl"
        onClick={() => navigate("/packages-plans/trial-plan-builder/create")}
      >
        Create Trial Plan
      </Button>

      <Button variant="outline" className="h-12 rounded-2xl">
        <Download size={18} />
        Export
      </Button>
    </div>
  );
}

export default TrialPlansToolbar;
