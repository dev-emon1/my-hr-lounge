import { CreditCard, CalendarClock, BadgeDollarSign } from "lucide-react";

function SubscriptionOverviewCard() {
  return (
    <div className="rounded-[28px] border border-border bg-card p-6 shadow-lg">
      <div className="flex items-center gap-3">
        <CreditCard className="text-primary" />

        <h3 className="text-xl font-black">Subscription Overview</h3>
      </div>

      <div className="mt-8 grid gap-6 md:grid-cols-3">
        <div>
          <p className="text-sm text-muted-foreground">Package</p>

          <p className="mt-2 text-lg font-black">Enterprise</p>
        </div>

        <div>
          <p className="text-sm text-muted-foreground">Billing Cycle</p>

          <div className="mt-2 flex items-center gap-2">
            <CalendarClock size={16} />

            <span className="font-semibold">Yearly</span>
          </div>
        </div>

        <div>
          <p className="text-sm text-muted-foreground">Revenue</p>

          <div className="mt-2 flex items-center gap-2">
            <BadgeDollarSign size={16} />

            <span className="font-semibold">$4,999</span>
          </div>
        </div>
      </div>

      <div className="mt-8 rounded-2xl bg-primary/5 p-5">
        <div className="flex items-center justify-between">
          <span className="font-medium">Subscription Expiry</span>

          <span className="font-black text-primary">18 Dec 2027</span>
        </div>
      </div>
    </div>
  );
}

export default SubscriptionOverviewCard;
