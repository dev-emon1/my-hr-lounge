import type { Quotation } from "../../types/quotation.types";

type Props = {
  quotation: Quotation;
};

function ClientInformationCard({ quotation }: Props) {
  return (
    <div className="rounded-[28px] border border-border p-6">
      <h3 className="text-xl font-black">Client Information</h3>

      <div className="mt-6 grid gap-6 md:grid-cols-2">
        <InfoItem label="Company" value={quotation.client} />

        <InfoItem label="Contact Person" value={quotation.contactPerson} />

        <InfoItem label="Email" value={quotation.email} />

        <InfoItem label="Phone" value={quotation.phone} />
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

export default ClientInformationCard;
