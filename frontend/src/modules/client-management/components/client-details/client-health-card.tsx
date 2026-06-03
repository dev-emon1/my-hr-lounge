import { Activity, ShieldCheck, TrendingUp } from "lucide-react";

function ClientHealthCard() {
  return (
    <div className="rounded-[28px] border border-border bg-card p-6 shadow-lg">
      <h3 className="text-xl font-black">Client Health</h3>

      <div className="mt-6 space-y-5">
        <div className="flex items-center gap-3">
          <TrendingUp size={18} className="text-green-500" />

          <span>Revenue Healthy</span>
        </div>

        <div className="flex items-center gap-3">
          <Activity size={18} className="text-green-500" />

          <span>High Activity</span>
        </div>

        <div className="flex items-center gap-3">
          <ShieldCheck size={18} className="text-green-500" />

          <span>No Security Risks</span>
        </div>
      </div>
    </div>
  );
}

export default ClientHealthCard;
