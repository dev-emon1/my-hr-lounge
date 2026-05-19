type Props = {
  title: string;

  description?: string;
};

function ModalHeader({ title, description }: Props) {
  return (
    <div className="mb-6">
      <h2 className="text-2xl font-black tracking-tight">{title}</h2>

      {description && (
        <p className="mt-2 text-sm text-muted-foreground">{description}</p>
      )}
    </div>
  );
}

export default ModalHeader;
