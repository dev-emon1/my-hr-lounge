function SubscriptionInformationCard() {
  const items = [
    {
      label: "Package",
      value: "Enterprise",
    },

    {
      label: "Billing Cycle",
      value: "Yearly",
    },

    {
      label: "Subscription Status",
      value: "Active",
    },

    {
      label: "Renewal Type",
      value: "Auto Renewal",
    },
  ];

  return (
    <div className="rounded-[28px] border border-border p-6">
      <h3 className="text-xl font-black">Subscription Information</h3>

      <div className="mt-6 grid gap-6 md:grid-cols-2">
        {items.map((item) => (
          <div key={item.label}>
            <p className="text-sm text-muted-foreground">{item.label}</p>

            <p className="mt-2 font-semibold">{item.value}</p>
          </div>
        ))}
      </div>
    </div>
  );
}

export default SubscriptionInformationCard;
