type Props = {
  title?: string;

  description?: string;
};

function DataTableEmpty({
  title = "No Data Found",

  description = "There is no available data to display.",
}: Props) {
  return (
    <div className="flex flex-col items-center justify-center py-16 text-center">
      <h3 className="text-xl font-bold">{title}</h3>

      <p className="mt-2 max-w-sm text-sm text-muted-foreground">
        {description}
      </p>
    </div>
  );
}

export default DataTableEmpty;
