import {
  BarChart3,
  BriefcaseBusiness,
  Building2,
  ClipboardCheck,
  FileText,
  Fingerprint,
  Gift,
  Laptop,
  ShieldCheck,
  Users,
} from "lucide-react";

import { Checkbox } from "@/shared/ui/checkbox";

function ModuleAccessSection() {
  const modules = [
    {
      title: "Attendance",

      description: "Attendance, shifts, GPS and biometric tracking.",

      icon: Fingerprint,

      enabled: true,
    },

    {
      title: "Leave Management",

      description: "Leave requests, approvals and balances.",

      icon: ClipboardCheck,

      enabled: true,
    },

    {
      title: "Payroll",

      description: "Salary processing, tax and payslips.",

      icon: Gift,

      enabled: true,
    },

    {
      title: "Recruitment",

      description: "Job postings and candidate management.",

      icon: BriefcaseBusiness,

      enabled: false,
    },

    {
      title: "Performance",

      description: "KPI, goals and performance reviews.",

      icon: BarChart3,

      enabled: false,
    },

    {
      title: "Asset Management",

      description: "Company assets and allocation tracking.",

      icon: Laptop,

      enabled: false,
    },

    {
      title: "Documents",

      description: "Employee documents and storage.",

      icon: FileText,

      enabled: true,
    },

    {
      title: "Organization",

      description: "Branches, departments and designations.",

      icon: Building2,

      enabled: true,
    },

    {
      title: "Employee Management",

      description: "Employee records and lifecycle management.",

      icon: Users,

      enabled: true,
    },
  ];

  return (
    <div className="overflow-hidden rounded-[28px] border border-border bg-card shadow-xl">
      {/* HEADER */}
      <div className="border-b border-border bg-gradient-to-r from-amber-500/10 to-transparent p-6 lg:p-8">
        <div>
          <div className="inline-flex items-center gap-2 rounded-full border border-amber-500/20 bg-amber-500/10 px-4 py-2 text-sm font-semibold text-amber-600">
            <ShieldCheck size={16} />
            Module Access
          </div>

          <h2 className="mt-4 text-3xl font-black tracking-tight">
            Configure Workspace Modules
          </h2>

          <p className="mt-3 max-w-3xl leading-7 text-muted-foreground">
            Enable or disable HRM modules for this client workspace based on
            package and business requirements.
          </p>
        </div>
      </div>

      {/* BODY */}
      <div className="grid gap-8 p-6 xl:grid-cols-[minmax(0,1fr)_380px] lg:p-8">
        {/* LEFT */}
        <div>
          <div className="grid gap-5 md:grid-cols-2">
            {modules.map((module) => {
              const Icon = module.icon;

              return (
                <div
                  key={module.title}
                  className="rounded-[28px] border border-border p-6 transition-all hover:border-primary/40"
                >
                  <div className="flex items-start justify-between gap-4">
                    <div className="flex h-12 w-12 items-center justify-center rounded-2xl bg-primary/10 text-primary">
                      <Icon size={22} />
                    </div>

                    <Checkbox checked={module.enabled} />
                  </div>

                  <h3 className="mt-5 text-lg font-black">{module.title}</h3>

                  <p className="mt-3 text-sm leading-7 text-muted-foreground">
                    {module.description}
                  </p>
                </div>
              );
            })}
          </div>
        </div>

        {/* RIGHT */}
        <div>
          <div className="sticky top-6 space-y-6">
            <div className="rounded-[28px] border border-border bg-card p-6 shadow-lg">
              <h3 className="text-xl font-black">Module Summary</h3>

              <div className="mt-6 space-y-4">
                <div className="flex justify-between">
                  <span className="text-muted-foreground">Total Modules</span>

                  <span className="font-black">9</span>
                </div>

                <div className="flex justify-between">
                  <span className="text-muted-foreground">Enabled</span>

                  <span className="font-black text-green-600">6</span>
                </div>

                <div className="flex justify-between">
                  <span className="text-muted-foreground">Disabled</span>

                  <span className="font-black text-orange-500">3</span>
                </div>
              </div>
            </div>

            <div className="rounded-[28px] border border-primary/20 bg-primary/5 p-6">
              <h4 className="font-bold text-primary">Package Integration</h4>

              <p className="mt-3 text-sm leading-7 text-muted-foreground">
                Module availability should be controlled automatically based on
                package assignment and feature entitlement rules.
              </p>
            </div>

            <div className="rounded-[28px] border border-border p-6">
              <h4 className="font-bold">Enterprise Recommendation</h4>

              <p className="mt-4 text-sm leading-7 text-muted-foreground">
                Keep only required modules enabled during onboarding. Additional
                modules can be activated later from Package Assignment or Client
                Settings.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  );
}

export default ModuleAccessSection;
