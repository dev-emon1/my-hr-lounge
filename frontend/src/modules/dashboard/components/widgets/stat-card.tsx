import type { LucideIcon } from "lucide-react";

import { TrendingUp } from "lucide-react";

type Props = {
  title: string;

  value: string;

  growth?: string;

  icon: LucideIcon;
};

function StatCard({ title, value, growth, icon: Icon }: Props) {
  return (
    <div className="group relative overflow-hidden rounded-3xl border border-border bg-card p-6 transition-all duration-300 hover:-translate-y-1 hover:shadow-xl">
      <div className="absolute right-0 top-0 h-32 w-32 rounded-full bg-primary/5 blur-3xl transition-all duration-300 group-hover:bg-primary/10" />

      <div className="relative">
        <div className="mb-5 flex items-center justify-between">
          <div className="flex h-14 w-14 items-center justify-center rounded-2xl bg-primary/10 text-primary">
            <Icon size={26} />
          </div>

          {growth && (
            <div className="flex items-center gap-1 rounded-full bg-emerald-500/10 px-3 py-1 text-xs font-semibold text-emerald-500">
              <TrendingUp size={12} />

              {growth}
            </div>
          )}
        </div>

        <div>
          <p className="text-sm text-muted-foreground">{title}</p>

          <h2 className="mt-2 text-3xl font-black tracking-tight">{value}</h2>
        </div>
      </div>
    </div>
  );
}

export default StatCard;
