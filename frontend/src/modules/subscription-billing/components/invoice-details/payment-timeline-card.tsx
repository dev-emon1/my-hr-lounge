import { CalendarClock, FileText, CreditCard } from "lucide-react";

function PaymentTimelineCard() {
  const timeline = [
    {
      id: 1,
      title: "Invoice Generated",
      date: "01 Jun 2026",
      icon: FileText,
    },

    {
      id: 2,
      title: "Invoice Sent",
      date: "02 Jun 2026",
      icon: CalendarClock,
    },

    {
      id: 3,
      title: "Payment Pending",
      date: "Current",
      icon: CreditCard,
    },
  ];

  return (
    <div className="rounded-[28px] border border-border p-6">
      <h3 className="text-xl font-black">Payment Timeline</h3>

      <div className="mt-6 space-y-6">
        {timeline.map((item) => {
          const Icon = item.icon;

          return (
            <div key={item.id} className="flex gap-4">
              <div className="flex h-11 w-11 items-center justify-center rounded-2xl bg-primary/10 text-primary">
                <Icon size={18} />
              </div>

              <div>
                <p className="font-semibold">{item.title}</p>

                <p className="text-sm text-muted-foreground">{item.date}</p>
              </div>
            </div>
          );
        })}
      </div>
    </div>
  );
}

export default PaymentTimelineCard;
