import { Badge } from "@/shared/ui/badge";

function PaymentInformationCard() {
  return (
    <div className="rounded-[28px] border border-border p-6">
      <div className="flex items-center justify-between">
        <h3 className="text-xl font-black">Payment Information</h3>

        <Badge className="bg-amber-500/10 text-amber-600">Pending</Badge>
      </div>

      <div className="mt-6 grid gap-6 md:grid-cols-2">
        <InfoItem label="Payment Status" value="Pending" />

        <InfoItem label="Payment Method" value="-" />

        <InfoItem label="Transaction ID" value="-" />

        <InfoItem label="Payment Gateway" value="-" />

        <InfoItem label="Paid Date" value="-" />

        <InfoItem label="Collected By" value="-" />
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

export default PaymentInformationCard;
