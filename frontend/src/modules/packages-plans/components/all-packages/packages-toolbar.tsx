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
type Props = {
  search: string;
  onSearchChange: (value: string) => void;
  statusFilter: string;
  onStatusChange: (value: string) => void;
  trialFilter: string;
  onTrialChange: (value: string) => void;
};

function PackagesToolbar({
  search,
  onSearchChange,
  statusFilter,
  onStatusChange,
  trialFilter,
  onTrialChange,
}: Props) {
  const navigate = useNavigate();
  return (
    <div className="flex flex-col gap-4 xl:flex-row xl:items-center xl:justify-between">
      <div className="flex flex-1 flex-col gap-4 lg:flex-row">
        <SearchFilter
          value={search}
          onChange={(e) => onSearchChange(e.target.value)}
          placeholder="Search packages..."
        />

        <Select value={statusFilter} onValueChange={onStatusChange}>
          <SelectTrigger className="h-12 w-full rounded-2xl lg:w-[180px]">
            <SelectValue placeholder="Status" />
          </SelectTrigger>

          <SelectContent>
            <SelectItem value="all">All Status</SelectItem>

            <SelectItem value="active">Active</SelectItem>

            <SelectItem value="inactive">Inactive</SelectItem>
          </SelectContent>
        </Select>

        <Select value={trialFilter} onValueChange={onTrialChange}>
          <SelectTrigger className="h-12 w-full rounded-2xl lg:w-[180px]">
            <SelectValue placeholder="Trial" />
          </SelectTrigger>

          <SelectContent>
            <SelectItem value="all">All Trial Types</SelectItem>

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
