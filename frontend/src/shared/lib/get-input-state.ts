export function getInputState(hasError?: boolean, hasValue?: boolean) {
  if (hasError) {
    return "border-destructive focus-visible:border-destructive";
  }

  if (hasValue) {
    return "border-green-500/40 focus-visible:border-green-500";
  }

  return "";
}
