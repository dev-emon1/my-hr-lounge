import {
  CalendarDays,
  CircleDollarSign,
  CreditCard,
  Database,
  ShieldCheck,
  Users,
} from "lucide-react";

function PackageOverviewTab() {
  const cards = [
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
        {cards.map((item) => {
          const Icon = item.icon;

          return (
            <div
              key={item.title}
              className="rounded-[24px] border border-border p-5"
            >
              <div className="flex items-center justify-between">
                <Icon size={22} className="text-primary" />

                <span className="text-xs text-green-600">Active</span>
              </div>

              <p className="mt-5 text-sm text-muted-foreground">{item.title}</p>

              <h4 className="mt-2 text-2xl font-black">{item.value}</h4>
            </div>
          );
        })}
      </div>

      <div className="grid gap-6 lg:grid-cols-2">
        <div className="rounded-[24px] border border-border p-6">
          <div className="flex items-center gap-3">
            <ShieldCheck className="text-green-600" size={20} />

            <h3 className="font-bold">Subscription Status</h3>
          </div>

          <div className="mt-6 space-y-4">
            <div className="flex justify-between">
              <span>Status</span>

              <span className="font-semibold text-green-600">Active</span>
            </div>

            <div className="flex justify-between">
              <span>Billing Cycle</span>

              <span className="font-semibold">Yearly</span>
            </div>

            <div className="flex justify-between">
              <span>Assigned Date</span>

              <span className="font-semibold">12 May 2026</span>
            </div>
          </div>
        </div>

        <div className="rounded-[24px] border border-border p-6">
          <div className="flex items-center gap-3">
            <CalendarDays size={20} className="text-primary" />

            <h3 className="font-bold">Renewal Information</h3>
          </div>

          <div className="mt-6">
            <h2 className="text-4xl font-black">87 Days</h2>

            <p className="mt-2 text-muted-foreground">
              Remaining before subscription renewal.
            </p>

            <p className="mt-4 font-semibold">Renewal Date: 31 Dec 2026</p>
          </div>
        </div>
      </div>
    </div>
  );
}

export default PackageOverviewTab;
