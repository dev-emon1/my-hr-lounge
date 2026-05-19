import type { ReactNode } from "react";

type Props = {
  children: ReactNode;
};

function SidebarContent({ children }: Props) {
  return <div className="flex-1 overflow-y-auto px-3 py-4">{children}</div>;
}

export default SidebarContent;
