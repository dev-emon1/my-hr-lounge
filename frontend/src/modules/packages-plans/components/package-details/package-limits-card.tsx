import type { Package } from "../../types/package.types";

type Props = {
  pkg: Package;
};

function PackageLimitsCard({ pkg }: Props) {
  return (
    <div className="rounded-[28px] border border-border p-6">
      <h3 className="text-xl font-black">Package Limits</h3>

      <div className="mt-6 grid gap-6 md:grid-cols-3">
        <LimitItem label="Employee Limit" value={String(pkg.employeeLimit)} />

        <LimitItem label="Branch Limit" value={String(pkg.branchLimit)} />

        <LimitItem label="Storage" value={pkg.storageLimit} />
      </div>
    </div>
  );
}

function LimitItem({ label, value }: { label: string; value: string }) {
  return (
    <div>
      <p className="text-sm text-muted-foreground">{label}</p>

      <p className="mt-2 text-lg font-bold">{value}</p>
    </div>
  );
}

export default PackageLimitsCard;
