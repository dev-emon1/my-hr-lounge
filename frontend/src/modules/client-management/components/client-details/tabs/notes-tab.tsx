import { Plus } from "lucide-react";

import { Button } from "@/shared/ui/button";

import { Textarea } from "@/shared/ui/textarea";

function NotesTab() {
  return (
    <div className="space-y-6">
      <div className="rounded-[28px] border border-border p-6">
        <div className="flex items-center justify-between">
          <h3 className="text-xl font-black">Internal Notes</h3>

          <Button>
            <Plus size={16} />
            Add Note
          </Button>
        </div>

        <div className="mt-6">
          <Textarea rows={6} placeholder="Add internal notes..." />
        </div>
      </div>

      <div className="rounded-[28px] border border-border p-6">
        <h4 className="font-bold">Enterprise Client</h4>

        <p className="mt-3 text-muted-foreground">Annual contract signed.</p>

        <p className="mt-4 text-xs text-muted-foreground">
          Added by Super Admin • 12 May 2026
        </p>
      </div>

      <div className="rounded-[28px] border border-border p-6">
        <h4 className="font-bold">Custom Pricing Approved</h4>

        <p className="mt-3 text-muted-foreground">
          Approved custom package pricing.
        </p>

        <p className="mt-4 text-xs text-muted-foreground">
          Added by Super Admin • 18 May 2026
        </p>
      </div>
    </div>
  );
}

export default NotesTab;
