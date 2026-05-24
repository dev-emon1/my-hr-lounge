import type { ReactNode } from "react";

type Props = {
  children: ReactNode;
};

function AuthWrapper({ children }: Props) {
  return (
    <div className="relative flex min-h-screen overflow-hidden bg-background">
      {/* LEFT SIDE */}
      <div className="hidden flex-1 flex-col justify-between border-r border-border bg-sidebar p-12 lg:flex">
        <div>
          <h1 className="text-4xl font-black tracking-tight text-primary">
            A&A
          </h1>

          <p className="mt-2 text-sm uppercase tracking-[0.4em] text-muted-foreground">
            HR Lounge
          </p>
        </div>

        <div className="max-w-xl">
          <h2 className="text-5xl font-black leading-tight">
            Enterprise HR Management Platform
          </h2>

          <p className="mt-6 text-lg leading-relaxed text-muted-foreground">
            Manage organizations, subscriptions, employees, payroll, attendance
            and enterprise operations from one centralized platform.
          </p>
        </div>

        <div className="text-sm text-muted-foreground">
          © 2026 My HR Lounge. All rights reserved.
        </div>
      </div>

      {/* RIGHT SIDE */}
      <div className="flex w-full items-center justify-center p-6 lg:w-[680px]">
        <div className="w-full max-w-md">{children}</div>
      </div>
    </div>
  );
}

export default AuthWrapper;
