import { Card } from "@/shared/ui/card";

type Props = {
  title: string;

  used: number;

  limit: number;

  icon: React.ReactNode;
};

function UsageProgressCard({ title, used, limit, icon }: Props) {
  const percentage = Math.round((used / limit) * 100);

  return (
    <Card className="rounded-[24px] border-border p-6">
      <div className="flex items-start justify-between">
        <div>
          <p className="text-sm text-muted-foreground">{title}</p>

          <h3 className="mt-3 text-2xl font-black">
            {used} / {limit}
          </h3>
        </div>

        <div className="flex h-12 w-12 items-center justify-center rounded-xl bg-primary/10 text-primary">
          {icon}
        </div>
      </div>

      <div className="mt-6">
        <div className="mb-2 flex items-center justify-between text-xs">
          <span>{percentage}% Used</span>

          <span>{limit - used} Remaining</span>
        </div>

        <div className="h-2 overflow-hidden rounded-full bg-muted">
          <div
            className="h-full rounded-full bg-primary transition-all"
            style={{
              width: `${percentage}%`,
            }}
          />
        </div>
      </div>
    </Card>
  );
}

export default UsageProgressCard;
