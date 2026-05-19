import { ReactNode } from "react";

type Props = {
  children: ReactNode;
};

function DashboardShell({ children }: Props) {
  return <div className="space-y-8">{children}</div>;
}

export default DashboardShell;
