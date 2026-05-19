import * as DropdownMenu from "@radix-ui/react-dropdown-menu";

import type { ReactNode } from "react";

import { cn } from "@/shared/lib/utils";

type Props = {
  trigger: ReactNode;

  children: ReactNode;
};

function CustomDropdownMenu({ trigger, children }: Props) {
  return (
    <DropdownMenu.Root>
      <DropdownMenu.Trigger asChild>{trigger}</DropdownMenu.Trigger>

      <DropdownMenu.Portal>
        <DropdownMenu.Content
          sideOffset={8}
          className={cn(
            "z-50 min-w-[180px] rounded-2xl border border-border bg-card p-2 shadow-2xl",
          )}
        >
          {children}
        </DropdownMenu.Content>
      </DropdownMenu.Portal>
    </DropdownMenu.Root>
  );
}

export default CustomDropdownMenu;
