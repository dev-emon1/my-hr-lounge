function TransactionHealthCard() {
  return (
    <div className="rounded-[28px] border border-border p-6">
      <h3 className="text-xl font-black">Transaction Health</h3>

      <div className="mt-6 space-y-4">
        <HealthRow label="Status" value="Successful" color="text-green-600" />

        <HealthRow label="Risk Score" value="Low" color="text-green-600" />

        <HealthRow
          label="Refund Status"
          value="Not Refunded"
          color="text-blue-600"
        />

        <HealthRow
          label="Verification"
          value="Verified"
          color="text-green-600"
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

export default TransactionHealthCard;
