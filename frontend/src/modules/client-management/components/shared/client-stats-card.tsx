import type { ReactNode } from "react";

type Props = {
  title: string;

  value: string | number;

  icon: ReactNode;

  change?: string;
};

function ClientStatsCard({ title, value, icon, change }: Props) {
  return (
    <div className="rounded-[28px] border border-border bg-card/70 p-6 backdrop-blur-xl">
      <div className="flex items-start justify-between">
        <div>
          <p className="text-sm text-muted-foreground">{title}</p>

          <h3 className="mt-3 text-3xl font-black">{value}</h3>

          {change && <p className="mt-2 text-sm text-emerald-400">{change}</p>}
        </div>

        <div className="flex h-14 w-14 items-center justify-center rounded-2xl bg-primary/10 text-primary">
          {icon}
        </div>
      </div>
    </div>
  );
}

export default ClientStatsCard;
