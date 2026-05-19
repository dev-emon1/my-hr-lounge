import * as CheckboxPrimitive from "@radix-ui/react-checkbox";

import { Check } from "lucide-react";

function Checkbox({
  ...props
}: React.ComponentProps<typeof CheckboxPrimitive.Root>) {
  return (
    <CheckboxPrimitive.Root
      {...props}
      className="flex h-5 w-5 items-center justify-center rounded border border-input bg-background data-[state=checked]:bg-primary data-[state=checked]:text-primary-foreground"
    >
      <CheckboxPrimitive.Indicator>
        <Check size={14} />
      </CheckboxPrimitive.Indicator>
    </CheckboxPrimitive.Root>
  );
}

export { Checkbox };
