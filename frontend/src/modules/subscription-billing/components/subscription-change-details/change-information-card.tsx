import type { SubscriptionChange } from "../../types/subscription-change.types";

type Props = {
  change: SubscriptionChange;
};

function ChangeInformationCard({ change }: Props) {
  return (
    <div className="rounded-[28px] border border-border p-6">
      <h3 className="text-xl font-black">Change Information</h3>

      <div className="mt-6 grid gap-6 md:grid-cols-2">
        <InfoItem label="Request Number" value={change.requestNumber} />

        <InfoItem label="Change Type" value={change.changeType} />

        <InfoItem label="Current Package" value={change.currentPackage} />

        <InfoItem label="Requested Package" value={change.requestedPackage} />

        <InfoItem label="Requested By" value={change.requestedBy} />

        <InfoItem label="Effective Date" value={change.effectiveDate} />
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

export default ChangeInformationCard;
