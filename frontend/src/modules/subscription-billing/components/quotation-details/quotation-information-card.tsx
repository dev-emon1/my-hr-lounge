import type { Quotation } from "../../types/quotation.types";

type Props = {
  quotation: Quotation;
};

function QuotationInformationCard({ quotation }: Props) {
  return (
    <div className="rounded-[28px] border border-border p-6">
      <h3 className="text-xl font-black">Quotation Information</h3>

      <div className="mt-6 grid gap-6 md:grid-cols-2">
        <InfoItem label="Quotation Number" value={quotation.quotationNumber} />

        <InfoItem label="Status" value={quotation.status} />

        <InfoItem label="Issue Date" value={quotation.issueDate} />

        <InfoItem label="Expiry Date" value={quotation.expiryDate} />

        <InfoItem label="Billing Cycle" value={quotation.billingCycle} />

        <InfoItem label="Prepared By" value="Super Admin" />
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

export default QuotationInformationCard;
