import { Label } from "./label";

type Props = {
  label: string;
  children: React.ReactNode;
};

function FormField({ label, children }: Props) {
  return (
    <div className="space-y-2">
      <Label>{label}</Label>

      {children}
    </div>
  );
}

export default FormField;
