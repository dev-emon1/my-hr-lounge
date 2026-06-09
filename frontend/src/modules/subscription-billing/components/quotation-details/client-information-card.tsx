function ClientInformationCard() {
  return (
    <div className="rounded-[28px] border border-border p-6">
      <h3 className="text-xl font-black">Client Information</h3>

      <div className="mt-6 grid gap-6 md:grid-cols-2">
        <InfoItem label="Company" value="Acme Corporation" />

        <InfoItem label="Contact Person" value="John Smith" />

        <InfoItem label="Email" value="admin@acme.com" />

        <InfoItem label="Phone" value="+8801XXXXXXXXX" />
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
