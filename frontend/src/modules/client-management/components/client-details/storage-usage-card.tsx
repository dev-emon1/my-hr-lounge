import { Database, HardDrive } from "lucide-react";

function StorageUsageCard() {
  return (
    <div className="rounded-[28px] border border-border bg-card p-6 shadow-lg">
      <div className="flex items-center gap-3">
        <Database className="text-primary" />

        <h3 className="text-xl font-black">Storage Usage</h3>
      </div>

      <div className="mt-6 flex items-center gap-3">
        <HardDrive className="text-primary" />

        <span className="font-semibold">18 GB / 50 GB Used</span>
      </div>

      <div className="mt-4 h-3 rounded-full bg-muted">
        <div className="h-3 w-[36%] rounded-full bg-primary" />
      </div>

      <div className="mt-4 flex justify-between text-sm">
        <span className="text-muted-foreground">Remaining</span>

        <span className="font-semibold">32 GB</span>
      </div>
    </div>
  );
}

export default StorageUsageCard;
