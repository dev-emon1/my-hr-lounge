import {
  Building2,
  CreditCard,
  Package,
  Plus,
  ShieldCheck,
  Users,
} from "lucide-react";

import WidgetCard from "./widget-card";

const actions = [
  {
    title: "Add Client",
    icon: Building2,
  },

  {
    title: "Create Package",
    icon: Package,
  },

  {
    title: "Create Subscription",
    icon: CreditCard,
  },

  {
    title: "Assign HR Admin",
    icon: Users,
  },

  {
    title: "Create Role",
    icon: ShieldCheck,
  },

  {
    title: "Add Module",
    icon: Plus,
  },
];

function QuickActions() {
  return (
    <WidgetCard>
      <div className="mb-6">
        <h3 className="text-lg font-bold">Quick Actions</h3>

        <p className="mt-1 text-sm text-muted-foreground">
          Frequently used platform operations
        </p>
      </div>

      <div className="grid grid-cols-2 gap-4">
        {actions.map((action) => {
          const Icon = action.icon;

          return (
            <button
              key={action.title}
              className="group rounded-2xl border border-border bg-background p-4 text-left transition-all duration-300 hover:-translate-y-1 hover:border-primary/30 hover:bg-primary/5"
            >
              <div className="mb-4 flex h-12 w-12 items-center justify-center rounded-2xl bg-primary/10 text-primary transition-all duration-300 group-hover:bg-primary group-hover:text-primary-foreground">
                <Icon size={22} />
              </div>

              <h4 className="text-sm font-semibold">{action.title}</h4>
            </button>
          );
        })}
      </div>
    </WidgetCard>
  );
}

export default QuickActions;
