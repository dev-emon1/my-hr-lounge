import { useState } from "react";

import {
  Archive,
  Ban,
  CreditCard,
  LogIn,
  Mail,
  Pencil,
  RotateCcw,
} from "lucide-react";

import { Button } from "@/shared/ui/button";

import EditClientModal from "./modals/edit-client-modal";

import ManageSubscriptionDrawer from "./drawers/manage-subscription-drawer";

import SuspendClientDialog from "./dialogs/suspend-client-dialog";

import ArchiveClientDialog from "./dialogs/archive-client-dialog";

import ResetWorkspaceDialog from "./dialogs/reset-workspace-dialog";

import LoginAsAdminDialog from "./dialogs/login-as-admin-dialog";

import WelcomeEmailModal from "./modals/welcome-email-modal";

function QuickActionsCard() {
  const [editOpen, setEditOpen] = useState(false);

  const [subscriptionOpen, setSubscriptionOpen] = useState(false);

  const [suspendOpen, setSuspendOpen] = useState(false);

  const [archiveOpen, setArchiveOpen] = useState(false);

  const [resetOpen, setResetOpen] = useState(false);

  const [loginOpen, setLoginOpen] = useState(false);

  const [emailOpen, setEmailOpen] = useState(false);

  return (
    <>
      <div className="rounded-[28px] border border-border bg-card p-6 shadow-lg">
        <h3 className="text-xl font-black">Quick Actions</h3>

        {/* MANAGEMENT */}

        <div className="mt-6">
          <p className="mb-3 text-xs font-bold uppercase tracking-wider text-muted-foreground">
            Management
          </p>

          <div className="space-y-2">
            <Button
              variant="outline"
              className="w-full justify-start gap-2"
              onClick={() => setEditOpen(true)}
            >
              <Pencil size={16} />
              Edit Client
            </Button>

            <Button
              variant="outline"
              className="w-full justify-start gap-2"
              onClick={() => setSubscriptionOpen(true)}
            >
              <CreditCard size={16} />
              Manage Subscription
            </Button>

            <Button
              variant="outline"
              className="w-full justify-start gap-2"
              onClick={() => setLoginOpen(true)}
            >
              <LogIn size={16} />
              Login As Admin
            </Button>
          </div>
        </div>

        {/* COMMUNICATION */}

        <div className="mt-8">
          <p className="mb-3 text-xs font-bold uppercase tracking-wider text-muted-foreground">
            Communication
          </p>

          <Button
            variant="outline"
            className="w-full justify-start gap-2"
            onClick={() => setEmailOpen(true)}
          >
            <Mail size={16} />
            Send Welcome Email
          </Button>
        </div>

        {/* SECURITY */}

        <div className="mt-8">
          <p className="mb-3 text-xs font-bold uppercase tracking-wider text-muted-foreground">
            Security
          </p>

          <div className="space-y-2">
            <Button
              variant="outline"
              className="w-full justify-start gap-2 border-amber-500/30 text-amber-600"
              onClick={() => setSuspendOpen(true)}
            >
              <Ban size={16} />
              Suspend Client
            </Button>

            <Button
              variant="outline"
              className="w-full justify-start gap-2 border-destructive/30 text-destructive"
              onClick={() => setArchiveOpen(true)}
            >
              <Archive size={16} />
              Archive Client
            </Button>

            <Button
              variant="destructive"
              className="w-full justify-start gap-2"
              onClick={() => setResetOpen(true)}
            >
              <RotateCcw size={16} />
              Reset Workspace
            </Button>
          </div>
        </div>
      </div>

      {/* MODALS */}

      <EditClientModal open={editOpen} onOpenChange={setEditOpen} />

      <ManageSubscriptionDrawer
        open={subscriptionOpen}
        onOpenChange={setSubscriptionOpen}
      />

      <LoginAsAdminDialog open={loginOpen} onOpenChange={setLoginOpen} />

      <WelcomeEmailModal open={emailOpen} onOpenChange={setEmailOpen} />

      <SuspendClientDialog open={suspendOpen} onOpenChange={setSuspendOpen} />

      <ArchiveClientDialog open={archiveOpen} onOpenChange={setArchiveOpen} />

      <ResetWorkspaceDialog open={resetOpen} onOpenChange={setResetOpen} />
    </>
  );
}

export default QuickActionsCard;
