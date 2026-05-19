type Props = {
  search: string;

  onSearchChange: (value: string) => void;
};

function DataTableToolbar({ search, onSearchChange }: Props) {
  return (
    <div className="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
      <div>
        <h3 className="text-xl font-bold">Data Table</h3>

        <p className="text-sm text-muted-foreground">
          Manage and organize records
        </p>
      </div>

      <input
        type="text"
        placeholder="Search..."
        value={search}
        onChange={(e) => onSearchChange(e.target.value)}
        className="h-11 w-full rounded-xl border bg-background px-4 outline-none md:w-80"
      />
    </div>
  );
}

export default DataTableToolbar;
