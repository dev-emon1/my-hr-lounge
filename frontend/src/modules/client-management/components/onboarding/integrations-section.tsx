import { Building, Mail, MessageSquare, Smartphone, Video } from "lucide-react";

import { Checkbox } from "@/shared/ui/checkbox";

function IntegrationsSection() {
  const integrations = [
    {
      name: "Google Workspace",

      description: "Google SSO, Gmail, Calendar and Directory sync.",

      icon: Building,

      enabled: true,

      category: "Identity & Productivity",
    },

    {
      name: "Microsoft 365",

      description: "Azure AD, Outlook, Teams and Office integration.",

      icon: Building,

      enabled: false,

      category: "Identity & Productivity",
    },

    {
      name: "Slack",

      description: "Employee notifications and workflow automation.",

      icon: MessageSquare,

      enabled: false,

      category: "Communication",
    },

    {
      name: "Zoom",

      description: "Interview scheduling and virtual meetings.",

      icon: Video,

      enabled: false,

      category: "Communication",
    },

    {
      name: "SMTP Mail Server",

      description: "Custom email delivery and notifications.",

      icon: Mail,

      enabled: true,

      category: "Email Infrastructure",
    },

    {
      name: "Biometric Device",

      description: "Attendance machine synchronization.",

      icon: Smartphone,

      enabled: false,

      category: "Attendance",
    },
  ];

  return (
    <div className="overflow-hidden rounded-[28px] border border-border bg-card shadow-xl">
      {/* HEADER */}
      <div className="border-b border-border bg-gradient-to-r from-sky-500/10 to-transparent p-6 lg:p-8">
        <div>
          <div className="inline-flex items-center gap-2 rounded-full border border-sky-500/20 bg-sky-500/10 px-4 py-2 text-sm font-semibold text-sky-600">
            <Building size={16} />
            Integrations
          </div>

          <h2 className="mt-4 text-3xl font-black tracking-tight">
            Third-Party Integrations
          </h2>

          <p className="mt-3 max-w-3xl leading-7 text-muted-foreground">
            Connect external systems, identity providers, communication
            platforms, and attendance devices.
          </p>
        </div>
      </div>

      {/* BODY */}
      <div className="grid gap-8 p-6 xl:grid-cols-[minmax(0,1fr)_380px] lg:p-8">
        {/* LEFT */}
        <div>
          <div className="grid gap-5 md:grid-cols-2">
            {integrations.map((integration) => {
              const Icon = integration.icon;

              return (
                <div
                  key={integration.name}
                  className="rounded-[28px] border border-border p-6 transition-all hover:border-primary/40"
                >
                  <div className="flex items-start justify-between">
                    <div className="flex h-12 w-12 items-center justify-center rounded-2xl bg-primary/10 text-primary">
                      <Icon size={22} />
                    </div>

                    <Checkbox checked={integration.enabled} />
                  </div>

                  <div className="mt-5">
                    <div className="inline-flex rounded-full border border-primary/20 bg-primary/10 px-3 py-1 text-xs font-medium text-primary">
                      {integration.category}
                    </div>

                    <h3 className="mt-4 text-lg font-black">
                      {integration.name}
                    </h3>

                    <p className="mt-3 text-sm leading-7 text-muted-foreground">
                      {integration.description}
                    </p>
                  </div>
                </div>
              );
            })}
          </div>
        </div>

        {/* RIGHT */}
        <div>
          <div className="sticky top-6 space-y-6">
            <div className="rounded-[28px] border border-border bg-card p-6 shadow-lg">
              <h3 className="text-xl font-black">Integration Summary</h3>

              <div className="mt-6 space-y-4">
                <div className="flex justify-between">
                  <span className="text-muted-foreground">Available</span>

                  <span className="font-black">6</span>
                </div>

                <div className="flex justify-between">
                  <span className="text-muted-foreground">Connected</span>

                  <span className="font-black text-green-600">2</span>
                </div>

                <div className="flex justify-between">
                  <span className="text-muted-foreground">Pending</span>

                  <span className="font-black text-orange-500">4</span>
                </div>
              </div>
            </div>

            <div className="rounded-[28px] border border-primary/20 bg-primary/5 p-6">
              <h4 className="font-bold text-primary">
                Enterprise Recommendation
              </h4>

              <p className="mt-3 text-sm leading-7 text-muted-foreground">
                Configure only critical integrations during onboarding.
                Additional systems can be connected later from Workspace
                Settings.
              </p>
            </div>

            <div className="rounded-[28px] border border-border p-6">
              <h4 className="font-bold">Future Integrations</h4>

              <ul className="mt-4 space-y-3 text-sm text-muted-foreground">
                <li>• SAP</li>
                <li>• Oracle HRMS</li>
                <li>• BambooHR</li>
                <li>• Workday</li>
                <li>• Active Directory</li>
                <li>• Custom APIs</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  );
}

export default IntegrationsSection;
