import { Lock, ShieldCheck, CheckCircle2 } from "lucide-react";

function SecurityScoreCard() {
  return (
    <div className="rounded-[28px] border border-border bg-card p-6 shadow-lg">
      <div className="flex items-center gap-3">
        <ShieldCheck className="text-green-500" />

        <h3 className="text-xl font-black">Security Score</h3>
      </div>

      <div className="mt-6">
        <div className="flex items-end justify-between">
          <span className="text-muted-foreground">Overall Security</span>

          <span className="text-3xl font-black text-green-600">92%</span>
        </div>

        <div className="mt-4 h-3 rounded-full bg-muted">
          <div className="h-3 w-[92%] rounded-full bg-green-500" />
        </div>
      </div>

      <div className="mt-6 space-y-4">
        <div className="flex items-center gap-3">
          <CheckCircle2 size={18} className="text-green-500" />
          MFA Enabled
        </div>

        <div className="flex items-center gap-3">
          <CheckCircle2 size={18} className="text-green-500" />
          Audit Logs Active
        </div>

        <div className="flex items-center gap-3">
          <Lock size={18} className="text-green-500" />
          Password Policy Applied
        </div>
      </div>
    </div>
  );
}

export default SecurityScoreCard;
