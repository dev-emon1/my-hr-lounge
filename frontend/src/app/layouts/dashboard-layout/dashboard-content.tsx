import type { ReactNode } from "react";

type Props = {
  children: ReactNode;
};

function DashboardContent({ children }: Props) {
  return (
    <main className="flex-1 overflow-y-auto overflow-x-hidden">
      <div className="p-4 md:p-6 xl:p-8">{children}</div>
    </main>
  );
}

export default DashboardContent;
