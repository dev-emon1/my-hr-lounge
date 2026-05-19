import { Sparkles, Zap } from "lucide-react";

function SidebarFooter() {
  return (
    <div className="border-t border-border p-4">
      <div className="overflow-hidden rounded-3xl border border-primary/15 bg-primary/5">
        <div className="relative p-4">
          <div className="absolute right-0 top-0 h-24 w-24 rounded-full bg-primary/10 blur-3xl" />

          <div className="relative">
            <div className="mb-4 flex h-11 w-11 items-center justify-center rounded-2xl bg-primary text-primary-foreground shadow-lg shadow-primary/20">
              <Sparkles size={18} />
            </div>

            <h4 className="text-sm font-bold">Enterprise HR Suite</h4>

            <p className="mt-1 text-xs leading-relaxed text-muted-foreground">
              Manage subscriptions, companies, modules and platform operations
              efficiently.
            </p>

            <div className="mt-4 flex items-center gap-2 rounded-xl border border-border bg-background/60 px-3 py-2">
              <Zap size={14} className="text-primary" />

              <span className="text-xs font-medium">SaaS Platform Active</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  );
}

export default SidebarFooter;

// Footer will show
// current plan
// active workspace
// storage usage
// AI credits
// subscription expiry
// platform health
