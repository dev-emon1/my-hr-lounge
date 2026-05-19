type Props = {
  title: string;
};

function SidebarGroupLabel({ title }: Props) {
  return (
    <div className="px-3 pb-2 pt-5">
      <p className="text-[11px] font-black uppercase tracking-[0.22em] text-muted-foreground">
        {title}
      </p>
    </div>
  );
}

export default SidebarGroupLabel;
