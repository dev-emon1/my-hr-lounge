import { AlertTriangle, CheckCircle2, ShieldAlert } from "lucide-react";

function UsageSummaryCard() {
  return (
    <div className="grid gap-5 md:grid-cols-3">
      <div className="rounded-[24px] border border-green-500/20 bg-green-500/5 p-5">
        <div className="flex items-center gap-3">
          <CheckCircle2 size={22} className="text-green-500" />

          <div>
            <h4 className="font-bold">Healthy Resources</h4>

            <p className="text-sm text-muted-foreground">
              4 resources below 70%
            </p>
          </div>
        </div>
      </div>

      <div className="rounded-[24px] border border-amber-500/20 bg-amber-500/5 p-5">
        <div className="flex items-center gap-3">
          <AlertTriangle size={22} className="text-amber-500" />

          <div>
            <h4 className="font-bold">Warning Resources</h4>

            <p className="text-sm text-muted-foreground">
              1 resource above 70%
            </p>
          </div>
        </div>
      </div>

      <div className="rounded-[24px] border border-red-500/20 bg-red-500/5 p-5">
        <div className="flex items-center gap-3">
          <ShieldAlert size={22} className="text-red-500" />

          <div>
            <h4 className="font-bold">Critical Resources</h4>

            <p className="text-sm text-muted-foreground">
              1 resource above 90%
            </p>
          </div>
        </div>
      </div>
    </div>
  );
}

export default UsageSummaryCard;
