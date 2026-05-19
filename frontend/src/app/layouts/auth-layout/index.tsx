import type { ReactNode } from "react";

type Props = {
  children: ReactNode;
};

function AuthLayout({ children }: Props) {
  return (
    <div className="flex min-h-screen items-center justify-center bg-background px-4">
      {children}
    </div>
  );
}

export default AuthLayout;
