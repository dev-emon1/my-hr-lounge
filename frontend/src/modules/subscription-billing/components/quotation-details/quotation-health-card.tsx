function QuotationHealthCard() {
  return (
    <div className="rounded-[28px] border border-border p-6">
      <h3 className="text-xl font-black">Quotation Health</h3>

      <div className="mt-6 space-y-4">
        <HealthRow
          label="Quotation Status"
          value="Approved"
          color="text-green-600"
        />

        <HealthRow
          label="Approval Status"
          value="Completed"
          color="text-green-600"
        />

        <HealthRow
          label="Onboarding Status"
          value="Pending"
          color="text-amber-600"
        />

        <HealthRow
          label="Conversion Status"
          value="Not Converted"
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

export default QuotationHealthCard;
