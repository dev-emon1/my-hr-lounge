import {
  CalendarDays,
  CreditCard,
  Users,
  Database,
  CircleDollarSign,
  ShieldCheck,
} from "lucide-react";

function SubscriptionOverviewTab() {
  const stats = [
    {
      title: "Current Package",
      value: "Enterprise",
      icon: CreditCard,
    },
    {
      title: "Monthly Revenue",
      value: "৳120,000",
      icon: CircleDollarSign,
    },
    {
      title: "Employee Limit",
      value: "5000",
      icon: Users,
    },
    {
      title: "Storage Limit",
      value: "2 TB",
      icon: Database,
    },
  ];

  return (
    <div className="space-y-8">
      <div className="grid gap-5 lg:grid-cols-4">
        {stats.map((item) => {
          const Icon = item.icon;

          return (
            <div
              key={item.title}
              className="rounded-[24px] border border-border p-5"
            >
              <div className="flex items-center justify-between">
                <Icon size={22} className="text-primary" />

                <span className="text-xs text-muted-foreground">Active</span>
              </div>

              <h4 className="mt-5 text-sm text-muted-foreground">
                {item.title}
              </h4>

              <p className="mt-2 text-2xl font-black">{item.value}</p>
            </div>
          );
        })}
      </div>

      <div className="grid gap-6 lg:grid-cols-2">
        <div className="rounded-[24px] border border-border p-6">
          <div className="flex items-center gap-3">
            <ShieldCheck className="text-green-500" />

            <h3 className="font-bold">Subscription Status</h3>
          </div>

          <div className="mt-6">
            <div className="flex justify-between">
              <span>Status</span>

              <span className="font-semibold text-green-600">Active</span>
            </div>

            <div className="mt-4 flex justify-between">
              <span>Renewal Date</span>

              <span className="font-semibold">31 Dec 2026</span>
            </div>

            <div className="mt-4 flex justify-between">
              <span>Billing Cycle</span>

              <span className="font-semibold">Yearly</span>
            </div>
          </div>
        </div>

        <div className="rounded-[24px] border border-border p-6">
          <div className="flex items-center gap-3">
            <CalendarDays className="text-primary" />

            <h3 className="font-bold">Upcoming Renewal</h3>
          </div>

          <div className="mt-6">
            <p className="text-4xl font-black">87 Days</p>

            <p className="mt-2 text-muted-foreground">
              Remaining before renewal.
            </p>
          </div>
        </div>
      </div>
    </div>
  );
}

export default SubscriptionOverviewTab;
