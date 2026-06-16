import type { Package } from "../../types/package.types";

type Props = {
  pkg: Package;
};

function PackageHealthCard({ pkg }: Props) {
  return (
    <div className="rounded-[28px] border border-border p-6">
      <h3 className="text-xl font-black">Package Health</h3>

      <div className="mt-6 space-y-4">
        <HealthRow
          label="Package Status"
          value={pkg.status}
          color={
            pkg.status === "Active"
              ? "text-emerald-600"
              : pkg.status === "Draft"
                ? "text-amber-600"
                : "text-slate-600"
          }
        />

        <HealthRow
          label="Trial Available"
          value={pkg.trialAvailable ? "Enabled" : "Disabled"}
          color={pkg.trialAvailable ? "text-blue-600" : "text-slate-600"}
        />

        <HealthRow
          label="Active Clients"
          value={String(pkg.activeClients)}
          color="text-primary"
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

export default PackageHealthCard;
