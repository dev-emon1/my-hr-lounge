import type { ReactNode } from "react";

type Props = {
  children: ReactNode;
};

function StatCardGrid({ children }: Props) {
  return (
    <div className="grid gap-6 md:grid-cols-2 xl:grid-cols-4">{children}</div>
  );
}

export default StatCardGrid;
