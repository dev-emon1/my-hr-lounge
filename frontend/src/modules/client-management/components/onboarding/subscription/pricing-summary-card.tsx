type Props = {
  packageName: string;

  billingCycle: string;

  price: number;
};

function PricingSummaryCard({ packageName, billingCycle, price }: Props) {
  return (
    <div className="rounded-[28px] border border-border bg-card p-6 shadow-lg">
      <h3 className="text-xl font-black">Subscription Summary</h3>

      <div className="mt-6 space-y-4">
        <div className="flex justify-between">
          <span className="text-muted-foreground">Package</span>

          <span className="font-semibold">{packageName}</span>
        </div>

        <div className="flex justify-between">
          <span className="text-muted-foreground">Billing</span>

          <span className="font-semibold capitalize">{billingCycle}</span>
        </div>

        <div className="flex justify-between">
          <span className="text-muted-foreground">Revenue</span>

          <span className="font-black text-primary">${price}</span>
        </div>
      </div>
    </div>
  );
}

export default PricingSummaryCard;
