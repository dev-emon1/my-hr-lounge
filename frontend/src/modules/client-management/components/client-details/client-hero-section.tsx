import { BadgeCheck, Building2, Globe } from "lucide-react";

import { Button } from "@/shared/ui/button";

function ClientHeroSection() {
  return (
    <div className="overflow-hidden rounded-[32px] border border-border bg-card shadow-xl">
      <div className="bg-gradient-to-r from-primary/10 to-transparent p-8">
        <div className="flex flex-col gap-8 xl:flex-row xl:items-center xl:justify-between">
          <div className="flex items-start gap-5">
            <div className="flex h-20 w-20 items-center justify-center rounded-[28px] bg-primary/10 text-primary">
              <Building2 size={34} />
            </div>

            <div>
              <div className="flex flex-wrap items-center gap-3">
                <h1 className="text-4xl font-black tracking-tight">
                  Acme Corporation
                </h1>

                <div className="rounded-full bg-green-500/10 px-4 py-2 text-sm font-semibold text-green-600">
                  Active
                </div>
              </div>

              <p className="mt-3 text-muted-foreground">
                Enterprise Client Workspace
              </p>

              <div className="mt-5 flex flex-wrap gap-3">
                <div className="rounded-full border border-border px-4 py-2 text-sm">
                  Enterprise Package
                </div>

                <div className="rounded-full border border-border px-4 py-2 text-sm">
                  420 Employees
                </div>

                <div className="rounded-full border border-border px-4 py-2 text-sm">
                  18 GB Storage
                </div>
              </div>
            </div>
          </div>

          <div className="flex flex-wrap gap-3">
            <Button variant="outline">
              <Globe size={18} />
              Workspace URL
            </Button>

            <Button>
              <BadgeCheck size={18} />
              Manage Client
            </Button>
          </div>
        </div>
      </div>
    </div>
  );
}

export default ClientHeroSection;
