type Props = {
  title: string;
  value: string;
  progress: number;
};

function ProgressStatCard({ title, value, progress }: Props) {
  return (
    <div className="rounded-[28px] border border-border bg-card p-6 shadow-lg">
      <p className="text-sm text-muted-foreground">{title}</p>

      <h3 className="mt-3 text-2xl font-black">{value}</h3>

      <div className="mt-5 h-2 rounded-full bg-muted">
        <div
          className="h-2 rounded-full bg-primary"
          style={{
            width: `${progress}%`,
          }}
        />
      </div>
    </div>
  );
}

export default ProgressStatCard;
