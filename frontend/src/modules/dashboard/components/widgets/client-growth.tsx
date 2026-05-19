import {
  Area,
  AreaChart,
  CartesianGrid,
  ResponsiveContainer,
  Tooltip,
  XAxis,
} from "recharts";

import WidgetCard from "./widget-card";

const data = [
  {
    month: "Jan",
    clients: 24,
  },

  {
    month: "Feb",
    clients: 38,
  },

  {
    month: "Mar",
    clients: 52,
  },

  {
    month: "Apr",
    clients: 71,
  },

  {
    month: "May",
    clients: 96,
  },

  {
    month: "Jun",
    clients: 128,
  },
];

function ClientGrowth() {
  return (
    <WidgetCard>
      <div className="mb-6">
        <h3 className="text-lg font-bold">Client Growth</h3>

        <p className="mt-1 text-sm text-muted-foreground">
          Monthly onboarding growth analytics
        </p>
      </div>

      <div className="h-[340px]">
        <ResponsiveContainer width="100%" height="100%">
          <AreaChart data={data}>
            <defs>
              <linearGradient id="clients" x1="0" y1="0" x2="0" y2="1">
                <stop
                  offset="5%"
                  stopColor="hsl(var(--primary))"
                  stopOpacity={0.4}
                />

                <stop
                  offset="95%"
                  stopColor="hsl(var(--primary))"
                  stopOpacity={0}
                />
              </linearGradient>
            </defs>

            <CartesianGrid
              vertical={false}
              strokeDasharray="3 3"
              stroke="hsl(var(--border))"
            />

            <XAxis dataKey="month" axisLine={false} tickLine={false} />

            <Tooltip />

            <Area
              type="monotone"
              dataKey="clients"
              stroke="hsl(var(--primary))"
              fill="url(#clients)"
              strokeWidth={3}
            />
          </AreaChart>
        </ResponsiveContainer>
      </div>
    </WidgetCard>
  );
}

export default ClientGrowth;
