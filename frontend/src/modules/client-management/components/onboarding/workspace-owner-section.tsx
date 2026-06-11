import { useState } from "react";
import { KeyRound, Mail, Phone, ShieldCheck, UserRound } from "lucide-react";

import { Checkbox } from "@/shared/ui/checkbox";
import { Input } from "@/shared/ui/input";
import { Label } from "@/shared/ui/label";

import type { Quotation } from "@/modules/subscription-billing/types/quotation.types";

type Props = {
  quotation?: Quotation;
};

function WorkspaceOwnerSection({ quotation }: Props) {
  const [requirePasswordReset, setRequirePasswordReset] = useState(true);

  const [requireMfa, setRequireMfa] = useState(true);

  const [sendWelcomeEmail, setSendWelcomeEmail] = useState(true);

  return (
    <div className="overflow-hidden rounded-[28px] border border-border bg-card shadow-xl">
      {/* HEADER */}
      <div className="border-b border-border bg-gradient-to-r from-emerald-500/10 to-transparent p-6 lg:p-8">
        <div>
          <div className="inline-flex items-center gap-2 rounded-full border border-emerald-500/20 bg-emerald-500/10 px-4 py-2 text-sm font-semibold text-emerald-600">
            <ShieldCheck size={16} />
            Workspace Administration
          </div>

          <h2 className="mt-4 text-3xl font-black tracking-tight">
            Workspace Owner
          </h2>

          <p className="mt-3 max-w-3xl leading-7 text-muted-foreground">
            Configure the primary administrator account responsible for managing
            the client workspace.
          </p>
        </div>
      </div>

      {/* BODY */}
      <div className="grid gap-8 p-6 xl:grid-cols-[minmax(0,1fr)_380px] lg:p-8">
        {/* LEFT */}
        <div className="space-y-8">
          {/* ADMIN INFORMATION */}
          <div className="rounded-[28px] border border-border p-6">
            <h3 className="text-xl font-black">Administrator Information</h3>

            <p className="mt-2 text-sm text-muted-foreground">
              Primary account owner details.
            </p>

            <div className="mt-8 grid gap-6 md:grid-cols-2">
              {/* FULL NAME */}
              <div className="space-y-3">
                <Label>Full Name</Label>

                <div className="relative">
                  <UserRound
                    size={18}
                    className="absolute left-4 top-1/2 -translate-y-1/2 text-muted-foreground"
                  />

                  <Input
                    defaultValue={quotation?.contactPerson ?? ""}
                    className="h-12 pl-11"
                    placeholder="John Doe"
                  />
                </div>
              </div>

              {/* DESIGNATION */}
              <div className="space-y-3">
                <Label>Designation</Label>

                <Input className="h-12" placeholder="HR Director" />
              </div>

              {/* EMAIL */}
              <div className="space-y-3">
                <Label>Email Address</Label>

                <div className="relative">
                  <Mail
                    size={18}
                    className="absolute left-4 top-1/2 -translate-y-1/2 text-muted-foreground"
                  />

                  <Input
                    defaultValue={quotation?.email ?? ""}
                    className="h-12 pl-11"
                    placeholder="admin@company.com"
                  />
                </div>
              </div>

              {/* PHONE */}
              <div className="space-y-3">
                <Label>Phone Number</Label>

                <div className="relative">
                  <Phone
                    size={18}
                    className="absolute left-4 top-1/2 -translate-y-1/2 text-muted-foreground"
                  />

                  <Input
                    defaultValue={quotation?.phone ?? ""}
                    className="h-12 pl-11"
                    placeholder="+8801712345678"
                  />
                </div>
              </div>
            </div>
          </div>

          {/* SECURITY */}
          <div className="rounded-[28px] border border-border p-6">
            <h3 className="text-xl font-black">Account Security</h3>

            <p className="mt-2 text-sm text-muted-foreground">
              Configure authentication policies.
            </p>

            <div className="mt-8 space-y-6">
              <div className="space-y-3">
                <Label>Temporary Password</Label>

                <div className="relative">
                  <KeyRound
                    size={18}
                    className="absolute left-4 top-1/2 -translate-y-1/2 text-muted-foreground"
                  />

                  <Input
                    type="password"
                    className="h-12 pl-11"
                    placeholder="Temporary password"
                  />
                </div>
              </div>

              <div className="space-y-5">
                <div className="flex items-center justify-between rounded-2xl border border-border p-4">
                  <div>
                    <h4 className="font-semibold">Force Password Reset</h4>

                    <p className="text-sm text-muted-foreground">
                      User must create a new password on first login.
                    </p>
                  </div>

                  <Checkbox
                    checked={requirePasswordReset}
                    onCheckedChange={(checked) =>
                      setRequirePasswordReset(!!checked)
                    }
                  />
                </div>

                <div className="flex items-center justify-between rounded-2xl border border-border p-4">
                  <div>
                    <h4 className="font-semibold">
                      Multi-Factor Authentication
                    </h4>

                    <p className="text-sm text-muted-foreground">
                      Require MFA setup before accessing workspace.
                    </p>
                  </div>

                  <Checkbox
                    checked={requireMfa}
                    onCheckedChange={(checked) => setRequireMfa(!!checked)}
                  />
                </div>

                <div className="flex items-center justify-between rounded-2xl border border-border p-4">
                  <div>
                    <h4 className="font-semibold">Send Welcome Email</h4>

                    <p className="text-sm text-muted-foreground">
                      Automatically send login instructions.
                    </p>
                  </div>

                  <Checkbox
                    checked={sendWelcomeEmail}
                    onCheckedChange={(checked) =>
                      setSendWelcomeEmail(!!checked)
                    }
                  />
                </div>
              </div>
            </div>
          </div>
        </div>

        {/* RIGHT SIDEBAR */}
        <div>
          <div className="sticky top-6 rounded-[28px] border border-border bg-card p-6 shadow-lg">
            <h3 className="text-xl font-black">Account Summary</h3>

            <div className="mt-6 space-y-4">
              <div>
                <p className="text-xs uppercase tracking-wider text-muted-foreground">
                  Role
                </p>

                <p className="mt-1 font-semibold">Workspace Owner</p>
              </div>

              <div>
                <p className="text-xs uppercase tracking-wider text-muted-foreground">
                  Permissions
                </p>

                <p className="mt-1 font-semibold">Full Access</p>
              </div>

              <div>
                <p className="text-xs uppercase tracking-wider text-muted-foreground">
                  Security
                </p>

                <p className="mt-1 font-semibold text-green-600">
                  Enterprise Protected
                </p>
              </div>
            </div>

            <div className="mt-6 rounded-2xl border border-primary/20 bg-primary/5 p-4">
              <h4 className="font-semibold">Owner Privileges</h4>

              <p className="mt-2 text-sm leading-7 text-muted-foreground">
                This account will have complete access to all workspace modules,
                settings, users, permissions, reports, and organizational
                configurations.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  );
}

export default WorkspaceOwnerSection;
