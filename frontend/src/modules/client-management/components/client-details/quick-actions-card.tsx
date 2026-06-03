import { useState } from "react";

import { Ban, CreditCard, LogIn, Pencil } from "lucide-react";

import { Button } from "@/shared/ui/button";

import EditClientModal from "./modals/edit-client-modal";

function QuickActionsCard() {
  const [editOpen, setEditOpen] = useState(false);
  return (
    <>
      <div className="rounded-[28px] border border-border bg-card p-6 shadow-lg">
        <h3 className="text-xl font-black">Quick Actions</h3>

        <div className="mt-6 space-y-3">
          <Button
            variant="outline"
            className="w-full justify-start gap-2"
            onClick={() => setEditOpen(true)}
          >
            <Pencil size={16} />
            Edit Client
          </Button>

          <Button variant="outline" className="w-full justify-start">
            <CreditCard size={16} />
            Manage Subscription
          </Button>

          <Button variant="outline" className="w-full justify-start">
            <LogIn size={16} />
            Login As Admin
          </Button>

          <Button variant="destructive" className="w-full justify-start">
            <Ban size={16} />
            Suspend Client
          </Button>
        </div>
      </div>

      <EditClientModal open={editOpen} onOpenChange={setEditOpen} />
    </>
  );
}

export default QuickActionsCard;
