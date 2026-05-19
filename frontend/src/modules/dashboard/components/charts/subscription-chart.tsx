import { Cell, Pie, PieChart, ResponsiveContainer, Tooltip } from "recharts";

import ChartCard from "./chart-card";

import { subscriptionData } from "./data";

const COLORS = ["#3B82F6", "#6366F1", "#8B5CF6", "#06B6D4"];

function SubscriptionChart() {
  return (
    <ChartCard
      title="Subscription Distribution"
      description="Current package distribution"
    >
      <div className="h-[320px]">
        <ResponsiveContainer width="100%" height="100%">
          <PieChart>
            <Pie
              data={subscriptionData}
              dataKey="value"
              nameKey="name"
              innerRadius={70}
              outerRadius={110}
              paddingAngle={5}
            >
              {subscriptionData.map((_, index) => (
                <Cell key={index} fill={COLORS[index]} />
              ))}
            </Pie>

            <Tooltip />
          </PieChart>
        </ResponsiveContainer>
      </div>

      <div className="mt-4 grid grid-cols-2 gap-3">
        {subscriptionData.map((item, index) => (
          <div
            key={item.name}
            className="flex items-center gap-3 rounded-2xl border border-border p-3"
          >
            <div
              className="h-3 w-3 rounded-full"
              style={{
                background: COLORS[index],
              }}
            />

            <div>
              <p className="text-sm font-medium">{item.name}</p>

              <p className="text-xs text-muted-foreground">
                {item.value} clients
              </p>
            </div>
          </div>
        ))}
      </div>
    </ChartCard>
  );
}

export default SubscriptionChart;
