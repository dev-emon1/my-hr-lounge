import { AlertTriangle, ShieldCheck } from "lucide-react";

import WidgetCard from "./widget-card";

const alerts = [
  {
    title: "2FA Enabled",
    status: "Secure",
    icon: ShieldCheck,
  },

  {
    title: "Failed Login Attempts",
    status: "3 detected",
    icon: AlertTriangle,
  },

  {
    title: "Permission Changes",
    status: "2 updated",
    icon: ShieldCheck,
  },
];

function SecurityAlerts() {
  return (
    <WidgetCard>
      <div className="mb-6">
        <h3 className="text-lg font-bold">Security Alerts</h3>

        <p className="mt-1 text-sm text-muted-foreground">
          Platform security monitoring
        </p>
      </div>

      <div className="space-y-4">
        {alerts.map((alert) => {
          const Icon = alert.icon;

          return (
            <div
              key={alert.title}
              className="flex items-center justify-between rounded-2xl border border-border bg-background/40 p-4"
            >
              <div className="flex items-center gap-3">
                <div className="flex h-11 w-11 items-center justify-center rounded-2xl bg-primary/10 text-primary">
                  <Icon size={18} />
                </div>

                <div>
                  <h4 className="font-semibold">{alert.title}</h4>

                  <p className="text-sm text-muted-foreground">
                    Monitoring active
                  </p>
                </div>
              </div>

              <span className="rounded-full bg-primary/10 px-3 py-1 text-xs font-semibold text-primary">
                {alert.status}
              </span>
            </div>
          );
        })}
      </div>
    </WidgetCard>
  );
}

export default SecurityAlerts;
