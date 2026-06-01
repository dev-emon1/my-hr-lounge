import {
  Clock3,
  KeyRound,
  Lock,
  MonitorSmartphone,
  ShieldCheck,
} from "lucide-react";

import { Checkbox } from "@/shared/ui/checkbox";

import { Input } from "@/shared/ui/input";

import { Label } from "@/shared/ui/label";

import {
  Select,
  SelectContent,
  SelectItem,
  SelectTrigger,
  SelectValue,
} from "@/shared/ui/select";

function SecurityConfigurationSection() {
  return (
    <div className="overflow-hidden rounded-[28px] border border-border bg-card shadow-xl">
      {/* HEADER */}
      <div className="border-b border-border bg-gradient-to-r from-red-500/10 to-transparent p-6 lg:p-8">
        <div>
          <div className="inline-flex items-center gap-2 rounded-full border border-red-500/20 bg-red-500/10 px-4 py-2 text-sm font-semibold text-red-500">
            <ShieldCheck size={16} />
            Security Configuration
          </div>

          <h2 className="mt-4 text-3xl font-black tracking-tight">
            Workspace Security Policies
          </h2>

          <p className="mt-3 max-w-3xl leading-7 text-muted-foreground">
            Configure authentication rules, password policies, access controls,
            device trust and audit security settings for the client workspace.
          </p>
        </div>
      </div>

      {/* BODY */}
      <div className="grid gap-8 p-6 xl:grid-cols-[minmax(0,1fr)_380px] lg:p-8">
        {/* LEFT */}
        <div className="space-y-8">
          {/* AUTHENTICATION */}
          <div className="rounded-[28px] border border-border p-6">
            <h3 className="text-xl font-black">Authentication</h3>

            <div className="mt-8 space-y-5">
              <div className="flex items-center justify-between rounded-2xl border border-border p-4">
                <div>
                  <h4 className="font-semibold">Multi-Factor Authentication</h4>

                  <p className="text-sm text-muted-foreground">
                    Require MFA for all users.
                  </p>
                </div>

                <Checkbox checked />
              </div>

              <div className="flex items-center justify-between rounded-2xl border border-border p-4">
                <div>
                  <h4 className="font-semibold">Device Trust</h4>

                  <p className="text-sm text-muted-foreground">
                    Trust verified devices.
                  </p>
                </div>

                <Checkbox checked />
              </div>

              <div className="flex items-center justify-between rounded-2xl border border-border p-4">
                <div>
                  <h4 className="font-semibold">Audit Logging</h4>

                  <p className="text-sm text-muted-foreground">
                    Track all user activity.
                  </p>
                </div>

                <Checkbox checked />
              </div>
            </div>
          </div>

          {/* PASSWORD POLICY */}
          <div className="rounded-[28px] border border-border p-6">
            <h3 className="text-xl font-black">Password Policy</h3>

            <div className="mt-8 grid gap-6 md:grid-cols-2">
              <div className="space-y-3">
                <Label>Minimum Length</Label>

                <Input type="number" defaultValue={8} />
              </div>

              <div className="space-y-3">
                <Label>Password Expiry (Days)</Label>

                <Input type="number" defaultValue={90} />
              </div>
            </div>

            <div className="mt-6 space-y-4">
              <div className="flex items-center gap-3">
                <Checkbox checked />

                <span>Require Uppercase Characters</span>
              </div>

              <div className="flex items-center gap-3">
                <Checkbox checked />

                <span>Require Numbers</span>
              </div>

              <div className="flex items-center gap-3">
                <Checkbox checked />

                <span>Require Special Characters</span>
              </div>
            </div>
          </div>

          {/* SESSION CONTROL */}
          <div className="rounded-[28px] border border-border p-6">
            <h3 className="text-xl font-black">Session Control</h3>

            <div className="mt-8 grid gap-6 md:grid-cols-2">
              <div className="space-y-3">
                <Label>Session Timeout</Label>

                <Select>
                  <SelectTrigger>
                    <SelectValue placeholder="Select Timeout" />
                  </SelectTrigger>

                  <SelectContent>
                    <SelectItem value="15">15 Minutes</SelectItem>

                    <SelectItem value="30">30 Minutes</SelectItem>

                    <SelectItem value="60">1 Hour</SelectItem>

                    <SelectItem value="120">2 Hours</SelectItem>
                  </SelectContent>
                </Select>
              </div>

              <div className="space-y-3">
                <Label>Maximum Concurrent Sessions</Label>

                <Input type="number" defaultValue={2} />
              </div>
            </div>
          </div>

          {/* LOGIN PROTECTION */}
          <div className="rounded-[28px] border border-border p-6">
            <h3 className="text-xl font-black">Login Protection</h3>

            <div className="mt-8 grid gap-6 md:grid-cols-2">
              <div className="space-y-3">
                <Label>Max Login Attempts</Label>

                <Input type="number" defaultValue={5} />
              </div>

              <div className="space-y-3">
                <Label>Lockout Duration (Minutes)</Label>

                <Input type="number" defaultValue={15} />
              </div>
            </div>
          </div>
        </div>

        {/* RIGHT */}
        <div>
          <div className="sticky top-6 space-y-6">
            <div className="rounded-[28px] border border-border bg-card p-6 shadow-lg">
              <h3 className="text-xl font-black">Security Overview</h3>

              <div className="mt-6 space-y-5">
                <div className="flex items-center gap-3">
                  <ShieldCheck size={18} className="text-green-500" />

                  <span>MFA Enabled</span>
                </div>

                <div className="flex items-center gap-3">
                  <Lock size={18} className="text-green-500" />

                  <span>Password Policy Active</span>
                </div>

                <div className="flex items-center gap-3">
                  <Clock3 size={18} className="text-green-500" />

                  <span>Session Protection</span>
                </div>

                <div className="flex items-center gap-3">
                  <MonitorSmartphone size={18} className="text-green-500" />

                  <span>Device Trust Enabled</span>
                </div>
              </div>
            </div>

            <div className="rounded-[28px] border border-primary/20 bg-primary/5 p-6">
              <h4 className="font-bold text-primary">
                Enterprise Recommendation
              </h4>

              <p className="mt-3 text-sm leading-7 text-muted-foreground">
                Enable MFA, password complexity, audit logs, and session
                controls for all production client workspaces.
              </p>
            </div>

            <div className="rounded-[28px] border border-border p-6">
              <div className="flex items-center gap-3">
                <KeyRound size={18} className="text-primary" />

                <h4 className="font-bold">Security Score</h4>
              </div>

              <div className="mt-5">
                <div className="h-3 rounded-full bg-muted">
                  <div className="h-3 w-[90%] rounded-full bg-green-500" />
                </div>

                <p className="mt-3 text-sm text-muted-foreground">
                  Enterprise Ready (90%)
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  );
}

export default SecurityConfigurationSection;
