import type { ReactNode } from "react";

type Props = {
  title: string;
  value: string | number;
  description?: string;
  icon?: ReactNode;
};

function StatCard({ title, value, description, icon }: Props) {
  return (
    <div className="rounded-[28px] border border-border bg-card p-6 shadow-lg">
      <div className="flex items-start justify-between">
        <div>
          <p className="text-sm text-muted-foreground">{title}</p>

          <h3 className="mt-3 text-3xl font-black">{value}</h3>

          {description && (
            <p className="mt-2 text-sm text-muted-foreground">{description}</p>
          )}
        </div>

        {icon}
      </div>
    </div>
  );
}

export default StatCard;
