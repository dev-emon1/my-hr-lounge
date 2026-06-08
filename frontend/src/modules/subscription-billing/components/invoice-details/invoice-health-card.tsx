function InvoiceHealthCard() {
  return (
    <div className="rounded-[28px] border border-border p-6">
      <h3 className="text-xl font-black">Invoice Health</h3>

      <div className="mt-6 space-y-4">
        <HealthRow
          label="Payment Status"
          value="Pending"
          color="text-amber-600"
        />

        <HealthRow
          label="Collection Risk"
          value="Medium"
          color="text-amber-600"
        />

        <HealthRow
          label="Days Until Due"
          value="5 Days"
          color="text-blue-600"
        />
      </div>
    </div>
  );
}

function HealthRow({
  label,
  value,
  color,
}: {
  label: string;
  value: string;
  color: string;
}) {
  return (
    <div className="flex items-center justify-between">
      <span className="text-muted-foreground">{label}</span>

      <span className={`font-semibold ${color}`}>{value}</span>
    </div>
  );
}

export default InvoiceHealthCard;
