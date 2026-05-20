import {
  Bar,
  BarChart,
  CartesianGrid,
  ResponsiveContainer,
  Tooltip,
  XAxis,
} from "recharts";

import WidgetCard from "./widget-card";

const data = [
  {
    module: "HR",
    usage: 92,
  },

  {
    module: "Payroll",
    usage: 74,
  },

  {
    module: "Attendance",
    usage: 88,
  },

  {
    module: "Leave",
    usage: 68,
  },

  {
    module: "Recruitment",
    usage: 42,
  },
];

function ModuleUsage() {
  return (
    <WidgetCard>
      <div className="mb-6">
        <h3 className="text-lg font-bold">Module Usage</h3>

        <p className="mt-1 text-sm text-muted-foreground">
          Platform module engagement analytics
        </p>
      </div>

      <div className="h-[340px]">
        <ResponsiveContainer width="100%" height="100%">
          <BarChart data={data}>
            <CartesianGrid
              vertical={false}
              strokeDasharray="3 3"
              stroke="hsl(var(--border))"
            />

            <XAxis dataKey="module" axisLine={false} tickLine={false} />

            <Tooltip />

            <Bar
              dataKey="usage"
              radius={[10, 10, 0, 0]}
              fill="hsl(var(--primary))"
            />
          </BarChart>
        </ResponsiveContainer>
      </div>
    </WidgetCard>
  );
}

export default ModuleUsage;
