import type { ReactNode } from "react";

type Props = {
  title: string;
  description: string;
  icon?: ReactNode;
};

function EmptyState({ title, description, icon }: Props) {
  return (
    <div className="flex flex-col items-center justify-center rounded-[28px] border border-dashed border-border p-16 text-center">
      {icon}

      <h3 className="mt-4 text-xl font-bold">{title}</h3>

      <p className="mt-2 text-muted-foreground">{description}</p>
    </div>
  );
}

export default EmptyState;
