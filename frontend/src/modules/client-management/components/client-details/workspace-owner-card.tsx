import { Mail, Phone, User } from "lucide-react";

function WorkspaceOwnerCard() {
  return (
    <div className="rounded-[28px] border border-border bg-card p-6 shadow-lg">
      <h3 className="text-xl font-black">Workspace Owner</h3>

      <div className="mt-8 flex items-start gap-5">
        <div className="flex h-16 w-16 items-center justify-center rounded-2xl bg-primary/10 text-primary">
          <User size={26} />
        </div>

        <div>
          <h4 className="text-lg font-bold">John Smith</h4>

          <p className="text-muted-foreground">HR Director</p>

          <div className="mt-4 space-y-3">
            <div className="flex items-center gap-2">
              <Mail size={16} />
              john@acme.com
            </div>

            <div className="flex items-center gap-2">
              <Phone size={16} />
              +8801712345678
            </div>
          </div>
        </div>
      </div>
    </div>
  );
}

export default WorkspaceOwnerCard;
