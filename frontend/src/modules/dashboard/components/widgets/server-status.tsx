import { Database, Globe, Server, ShieldCheck } from "lucide-react";

import WidgetCard from "./widget-card";

const services = [
  {
    title: "API Gateway",
    status: "Operational",
    icon: Globe,
  },

  {
    title: "Database Cluster",
    status: "Healthy",
    icon: Database,
  },

  {
    title: "Application Server",
    status: "Running",
    icon: Server,
  },

  {
    title: "Security Layer",
    status: "Protected",
    icon: ShieldCheck,
  },
];

function ServerStatus() {
  return (
    <WidgetCard>
      <div className="mb-6">
        <h3 className="text-lg font-bold">Infrastructure Status</h3>

        <p className="mt-1 text-sm text-muted-foreground">
          Core platform service monitoring
        </p>
      </div>

      <div className="space-y-4">
        {services.map((service) => {
          const Icon = service.icon;

          return (
            <div
              key={service.title}
              className="flex items-center justify-between rounded-2xl border border-border bg-background/40 p-4"
            >
              <div className="flex items-center gap-3">
                <div className="flex h-11 w-11 items-center justify-center rounded-2xl bg-primary/10 text-primary">
                  <Icon size={18} />
                </div>

                <div>
                  <h4 className="font-semibold">{service.title}</h4>

                  <p className="text-sm text-muted-foreground">
                    Real-time monitoring active
                  </p>
                </div>
              </div>

              <span className="rounded-full bg-emerald-500/10 px-3 py-1 text-xs font-semibold text-emerald-500">
                {service.status}
              </span>
            </div>
          );
        })}
      </div>
    </WidgetCard>
  );
}

export default ServerStatus;
