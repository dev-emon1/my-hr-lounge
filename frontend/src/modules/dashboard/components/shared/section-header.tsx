type Props = {
  title: string;

  description?: string;

  action?: React.ReactNode;
};

function SectionHeader({ title, description, action }: Props) {
  return (
    <div className="flex flex-col justify-between gap-4 md:flex-row md:items-center">
      <div>
        <h2 className="text-2xl font-black tracking-tight">{title}</h2>

        {description && (
          <p className="mt-1 text-sm text-muted-foreground">{description}</p>
        )}
      </div>

      {action && <div>{action}</div>}
    </div>
  );
}

export default SectionHeader;
