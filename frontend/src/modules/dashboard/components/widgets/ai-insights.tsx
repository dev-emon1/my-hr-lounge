import { AlertTriangle, Brain, Sparkles, TrendingUp } from "lucide-react";

import WidgetCard from "./widget-card";

const insights = [
  {
    title: "3 subscriptions expiring soon",
    description: "Renewal reminders recommended for high-value clients.",
    icon: AlertTriangle,
  },

  {
    title: "Revenue trend increasing",
    description: "Platform revenue increased by 18% this month.",
    icon: TrendingUp,
  },

  {
    title: "AI detected growth opportunity",
    description: "12 companies are eligible for Enterprise upgrades.",
    icon: Brain,
  },
];

function AIInsights() {
  return (
    <WidgetCard className="relative overflow-hidden">
      <div className="absolute right-0 top-0 h-40 w-40 rounded-full bg-primary/10 blur-3xl" />

      <div className="relative">
        <div className="mb-6 flex items-center gap-3">
          <div className="flex h-12 w-12 items-center justify-center rounded-2xl bg-primary text-primary-foreground shadow-lg shadow-primary/20">
            <Sparkles size={22} />
          </div>

          <div>
            <h3 className="text-lg font-bold">AI Insights</h3>

            <p className="text-sm text-muted-foreground">
              Intelligent platform recommendations
            </p>
          </div>
        </div>

        <div className="space-y-4">
          {insights.map((insight) => {
            const Icon = insight.icon;

            return (
              <div
                key={insight.title}
                className="rounded-2xl border border-border bg-background/60 p-4"
              >
                <div className="flex items-start gap-3">
                  <div className="mt-0.5 flex h-10 w-10 items-center justify-center rounded-xl bg-primary/10 text-primary">
                    <Icon size={18} />
                  </div>

                  <div>
                    <h4 className="text-sm font-semibold">{insight.title}</h4>

                    <p className="mt-1 text-sm text-muted-foreground">
                      {insight.description}
                    </p>
                  </div>
                </div>
              </div>
            );
          })}
        </div>
      </div>
    </WidgetCard>
  );
}

export default AIInsights;
