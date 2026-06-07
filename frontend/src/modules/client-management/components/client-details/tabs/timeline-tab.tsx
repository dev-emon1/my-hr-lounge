import { Building2, CreditCard, ShieldCheck, UserPlus } from "lucide-react";

function TimelineTab() {
  const timeline = [
    {
      title: "Client Created",

      date: "12 May 2026",

      icon: UserPlus,
    },

    {
      title: "Package Assigned",

      date: "12 May 2026",

      icon: CreditCard,
    },

    {
      title: "Workspace Activated",

      date: "13 May 2026",

      icon: Building2,
    },

    {
      title: "Security Policy Applied",

      date: "14 May 2026",

      icon: ShieldCheck,
    },
  ];

  return (
    <div className="rounded-[28px] border border-border p-6">
      <h3 className="text-xl font-black">Client Timeline</h3>

      <div className="mt-8 space-y-6">
        {timeline.map((item) => {
          const Icon = item.icon;

          return (
            <div key={`${item.title}-${item.date}`} className="flex gap-4">
              <div className="flex h-12 w-12 items-center justify-center rounded-2xl bg-primary/10 text-primary">
                <Icon size={20} />
              </div>

              <div>
                <h4 className="font-semibold">{item.title}</h4>

                <p className="text-sm text-muted-foreground">{item.date}</p>
              </div>
            </div>
          );
        })}
      </div>
    </div>
  );
}

export default TimelineTab;
