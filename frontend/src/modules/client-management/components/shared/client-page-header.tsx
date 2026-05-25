import type { ReactNode } from "react";

type Props = {
  title: string;

  description?: string;

  action?: ReactNode;
};

function ClientPageHeader({ title, description, action }: Props) {
  return (
    <div className="flex flex-col gap-6 lg:flex-row lg:items-center lg:justify-between">
      <div>
        <h1 className="text-3xl font-black tracking-tight">{title}</h1>

        {description && (
          <p className="mt-2 text-muted-foreground">{description}</p>
        )}
      </div>

      {action && <div className="shrink-0">{action}</div>}
    </div>
  );
}

export default ClientPageHeader;
