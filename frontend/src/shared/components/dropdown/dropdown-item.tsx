import * as DropdownMenu from "@radix-ui/react-dropdown-menu";

import type { ReactNode } from "react";

type Props = {
  children: ReactNode;

  onClick?: () => void;

  destructive?: boolean;
};

function DropdownItem({ children, onClick, destructive }: Props) {
  return (
    <DropdownMenu.Item
      onClick={onClick}
      className={`flex cursor-pointer items-center rounded-xl px-3 py-2 text-sm outline-none transition-colors ${
        destructive
          ? "text-destructive hover:bg-destructive/10"
          : "hover:bg-muted"
      }`}
    >
      {children}
    </DropdownMenu.Item>
  );
}

export default DropdownItem;
