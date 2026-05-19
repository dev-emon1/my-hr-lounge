type Props = {
  label: string;
};

function FormLabel({ label }: Props) {
  return <label className="mb-2 block text-sm font-semibold">{label}</label>;
}

export default FormLabel;
