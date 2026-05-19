import { ShieldX } from "lucide-react";

function UnauthorizedPage() {
  return (
    <div className="flex min-h-[70vh] flex-col items-center justify-center gap-4 text-center">
      <div className="rounded-full bg-destructive/10 p-6 text-destructive">
        <ShieldX size={40} />
      </div>

      <div>
        <h1 className="text-3xl font-bold">Access Denied</h1>

        <p className="mt-2 text-muted-foreground">
          You do not have permission to access this page.
        </p>
      </div>
    </div>
  );
}

export default UnauthorizedPage;
