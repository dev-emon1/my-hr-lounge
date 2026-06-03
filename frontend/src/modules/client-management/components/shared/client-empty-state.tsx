import type { ReactNode } from "react";

type Props = {
  title: string;

  description?: string;

  icon?: ReactNode;
};

function ClientEmptyState({ title, description, icon }: Props) {
  return (
    <div className="flex min-h-[300px] flex-col items-center justify-center rounded-[28px] border border-dashed border-border bg-card/40 p-10 text-center">
      {icon && <div className="mb-6 text-primary">{icon}</div>}

      <h3 className="text-2xl font-black">{title}</h3>

      {description && (
        <p className="mt-3 max-w-md text-muted-foreground">{description}</p>
      )}
    </div>
  );
}

export default ClientEmptyState;
