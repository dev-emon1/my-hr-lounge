import {
  BadgeCheck,
  Building2,
  CheckCircle2,
  CreditCard,
  ShieldCheck,
  Users,
} from "lucide-react";

import { Button } from "@/shared/ui/button";

function ActivationReviewSection() {
  return (
    <div className="overflow-hidden rounded-[28px] border border-border bg-card shadow-xl">
      {/* HEADER */}
      <div className="border-b border-border bg-gradient-to-r from-green-500/10 to-transparent p-6 lg:p-8">
        <div>
          <div className="inline-flex items-center gap-2 rounded-full border border-green-500/20 bg-green-500/10 px-4 py-2 text-sm font-semibold text-green-600">
            <CheckCircle2 size={16} />
            Activation & Review
          </div>

          <h2 className="mt-4 text-3xl font-black tracking-tight">
            Review & Activate Workspace
          </h2>

          <p className="mt-3 max-w-3xl leading-7 text-muted-foreground">
            Review all onboarding configurations before provisioning the client
            workspace.
          </p>
        </div>
      </div>

      <div className="grid gap-8 p-6 xl:grid-cols-[minmax(0,1fr)_420px] lg:p-8">
        {/* LEFT */}
        <div className="space-y-6">
          {/* CLIENT */}
          <div className="rounded-[28px] border border-border p-6">
            <div className="flex items-center gap-3">
              <Building2 className="text-primary" />

              <h3 className="text-xl font-black">Client Information</h3>
            </div>

            <div className="mt-6 grid gap-4 md:grid-cols-2">
              <div>
                <p className="text-sm text-muted-foreground">Company</p>

                <p className="font-semibold">ABC Corporation</p>
              </div>

              <div>
                <p className="text-sm text-muted-foreground">Workspace</p>

                <p className="font-semibold">abc-corporation</p>
              </div>
            </div>
          </div>

          {/* SUBSCRIPTION */}
          <div className="rounded-[28px] border border-border p-6">
            <div className="flex items-center gap-3">
              <CreditCard className="text-primary" />

              <h3 className="text-xl font-black">Subscription Summary</h3>
            </div>

            <div className="mt-6 grid gap-4 md:grid-cols-3">
              <div>
                <p className="text-sm text-muted-foreground">Package</p>

                <p className="font-semibold">Enterprise</p>
              </div>

              <div>
                <p className="text-sm text-muted-foreground">Billing</p>

                <p className="font-semibold">Yearly</p>
              </div>

              <div>
                <p className="text-sm text-muted-foreground">Revenue</p>

                <p className="font-semibold">$4,999</p>
              </div>
            </div>
          </div>

          {/* MODULES */}
          <div className="rounded-[28px] border border-border p-6">
            <div className="flex items-center gap-3">
              <BadgeCheck className="text-primary" />

              <h3 className="text-xl font-black">Enabled Modules</h3>
            </div>

            <div className="mt-6 flex flex-wrap gap-3">
              {[
                "Attendance",
                "Leave",
                "Payroll",
                "Recruitment",
                "Performance",
                "Documents",
              ].map((module) => (
                <div
                  key={module}
                  className="rounded-full border border-primary/20 bg-primary/10 px-4 py-2 text-sm text-primary"
                >
                  {module}
                </div>
              ))}
            </div>
          </div>

          {/* SECURITY */}
          <div className="rounded-[28px] border border-border p-6">
            <div className="flex items-center gap-3">
              <ShieldCheck className="text-primary" />

              <h3 className="text-xl font-black">Security Status</h3>
            </div>

            <div className="mt-6 space-y-3">
              <div className="flex items-center gap-3">
                <CheckCircle2 size={18} className="text-green-500" />
                MFA Enabled
              </div>

              <div className="flex items-center gap-3">
                <CheckCircle2 size={18} className="text-green-500" />
                Password Policy Enabled
              </div>

              <div className="flex items-center gap-3">
                <CheckCircle2 size={18} className="text-green-500" />
                Audit Logs Enabled
              </div>
            </div>
          </div>
        </div>

        {/* RIGHT */}
        <div>
          <div className="sticky top-6 space-y-6">
            <div className="rounded-[28px] border border-border bg-card p-6 shadow-lg">
              <h3 className="text-xl font-black">Provisioning Checklist</h3>

              <div className="mt-6 space-y-4">
                {[
                  "Client Information",
                  "Workspace Identity",
                  "Subscription Setup",
                  "Workspace Owner",
                  "Departments",
                  "Designations",
                  "Modules",
                  "Security",
                ].map((item) => (
                  <div key={item} className="flex items-center gap-3">
                    <CheckCircle2 size={18} className="text-green-500" />

                    <span>{item}</span>
                  </div>
                ))}
              </div>
            </div>

            <div className="rounded-[28px] border border-primary/20 bg-primary/5 p-6">
              <div className="flex items-center gap-3">
                <Users className="text-primary" />

                <h4 className="font-bold">Workspace Ready</h4>
              </div>

              <p className="mt-4 text-sm leading-7 text-muted-foreground">
                All required onboarding sections are configured and ready for
                workspace provisioning.
              </p>
            </div>

            <Button size="lg" className="h-14 w-full text-base font-bold">
              Create Client Workspace
            </Button>
          </div>
        </div>
      </div>
    </div>
  );
}

export default ActivationReviewSection;
