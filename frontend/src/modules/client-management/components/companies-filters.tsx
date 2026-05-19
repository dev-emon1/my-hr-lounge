import { Search } from "lucide-react";

type Props = {
  search: string;

  onSearchChange: (value: string) => void;

  status: string;

  onStatusChange: (value: string) => void;
};

function CompaniesFilters({
  search,
  onSearchChange,
  status,
  onStatusChange,
}: Props) {
  return (
    <div className="flex flex-col gap-4 lg:flex-row lg:items-center lg:justify-between">
      <div className="relative w-full lg:w-96">
        <Search
          size={18}
          className="absolute left-4 top-1/2 -translate-y-1/2 text-muted-foreground"
        />

        <input
          type="text"
          placeholder="Search companies..."
          value={search}
          onChange={(e) => onSearchChange(e.target.value)}
          className="h-12 w-full rounded-2xl border border-input bg-background pl-11 pr-4 outline-none transition-all focus:border-primary focus:ring-4 focus:ring-primary/10"
        />
      </div>

      <div className="flex gap-3">
        <select
          value={status}
          onChange={(e) => onStatusChange(e.target.value)}
          className="h-12 rounded-2xl border border-input bg-background px-4 outline-none"
        >
          <option value="">All Status</option>

          <option value="active">Active</option>

          <option value="pending">Pending</option>

          <option value="inactive">Inactive</option>
        </select>
      </div>
    </div>
  );
}

export default CompaniesFilters;
