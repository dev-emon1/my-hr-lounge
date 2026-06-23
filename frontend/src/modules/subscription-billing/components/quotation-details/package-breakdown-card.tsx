import { packageLabels } from "../../constants/package-labels";
import type { Quotation } from "../../types/quotation.types";

type Props = {
  quotation: Quotation;
};

function PackageBreakdownCard({ quotation }: Props) {
  return (
    <div className="rounded-[28px] border border-border p-6">
      <h3 className="text-xl font-black">Package Breakdown</h3>

      <div className="mt-6 grid gap-6 md:grid-cols-2">
        <InfoItem
          label="Package"
          value={
            packageLabels[quotation.packageName as keyof typeof packageLabels]
          }
        />

        <InfoItem label="Billing Cycle" value={quotation.billingCycle} />

        <InfoItem
          label="Employee Limit"
          value={String(quotation.employeeLimit ?? "-")}
        />

        <InfoItem label="Branch Limit" value={quotation.branchLimit ?? "-"} />

        <InfoItem label="Storage" value={quotation.storageLimit ?? "-"} />

        <InfoItem label="Support" value={quotation.supportPlan ?? "-"} />
      </div>
    </div>
  );
}

function InfoItem({ label, value }: { label: string; value: string }) {
  return (
    <div>
      <p className="text-sm text-muted-foreground">{label}</p>

      <p className="mt-1 font-semibold">{value}</p>
    </div>
  );
}

export default PackageBreakdownCard;
