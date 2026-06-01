import { Globe, Building2, CalendarDays, MapPin } from "lucide-react";

function WorkspaceInformationCard() {
  return (
    <div className="rounded-[28px] border border-border bg-card p-6 shadow-lg">
      <div className="flex items-center gap-3">
        <Building2 className="text-primary" />

        <h3 className="text-xl font-black">Workspace Information</h3>
      </div>

      <div className="mt-8 grid gap-6 md:grid-cols-2">
        <div>
          <p className="text-sm text-muted-foreground">Workspace Name</p>

          <p className="mt-2 font-semibold">Acme Corporation</p>
        </div>

        <div>
          <p className="text-sm text-muted-foreground">Workspace Slug</p>

          <p className="mt-2 font-semibold">acme-corporation</p>
        </div>

        <div>
          <p className="text-sm text-muted-foreground">Workspace URL</p>

          <div className="mt-2 flex items-center gap-2">
            <Globe size={16} />

            <span className="font-semibold">acme.hr-lounge.com</span>
          </div>
        </div>

        <div>
          <p className="text-sm text-muted-foreground">Created Date</p>

          <div className="mt-2 flex items-center gap-2">
            <CalendarDays size={16} />

            <span className="font-semibold">12 May 2026</span>
          </div>
        </div>

        <div>
          <p className="text-sm text-muted-foreground">Country</p>

          <div className="mt-2 flex items-center gap-2">
            <MapPin size={16} />

            <span className="font-semibold">Bangladesh</span>
          </div>
        </div>

        <div>
          <p className="text-sm text-muted-foreground">Industry</p>

          <p className="mt-2 font-semibold">Information Technology</p>
        </div>
      </div>
    </div>
  );
}

export default WorkspaceInformationCard;
