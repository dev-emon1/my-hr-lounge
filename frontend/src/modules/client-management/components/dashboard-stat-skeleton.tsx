import { Skeleton } from "@/shared/ui/skeleton";

function DashboardStatSkeleton() {
  return (
    <div className="rounded-3xl border border-border bg-card p-6">
      <div className="flex items-start justify-between">
        <div className="space-y-3">
          <Skeleton className="h-4 w-28" />

          <Skeleton className="h-10 w-20" />
        </div>

        <Skeleton className="h-14 w-14 rounded-2xl" />
      </div>

      <div className="mt-6">
        <Skeleton className="h-3 w-32" />
      </div>
    </div>
  );
}

export default DashboardStatSkeleton;
