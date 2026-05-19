type Props = {
  message?: string;
};

function FormError({ message }: Props) {
  if (!message) {
    return null;
  }

  return <p className="mt-2 text-sm text-destructive">{message}</p>;
}

export default FormError;
