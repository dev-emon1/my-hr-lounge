import { useState } from "react";

import ExpiredPlansStats from "../components/expired-plans/expired-plans-stats";

import ExpiredPlansToolbar from "../components/expired-plans/expired-plans-toolbar";

import ExpiredPlansTable from "../components/expired-plans/expired-plans-table";

import type { ExpiredSubscription } from "../types/expired-subscription.types";

import ReactivateSubscriptionDialog from "../components/expired-plans/dialogs/reactivate-subscription-dialog";

import SendReminderDialog from "../components/pending-renewals/dialogs/send-reminder-dialog";

import GenerateInvoiceModal from "../components/subscription-details/dialogs/generate-invoice-modal";

function ExpiredPlansPage() {
  const [selectedSubscription, setSelectedSubscription] =
    useState<ExpiredSubscription | null>(null);

  const [reactivateOpen, setReactivateOpen] = useState(false);

  const [invoiceOpen, setInvoiceOpen] = useState(false);

  const [contactOpen, setContactOpen] = useState(false);

  const subscriptions: ExpiredSubscription[] = [
    {
      id: "1",

      client: "Acme Corporation",

      packageName: "Enterprise",

      expiredDate: "02 Jun 2026",

      daysExpired: 5,

      revenue: "৳ 50,000",

      workspaceStatus: "Suspended",

      status: "Expired",

      email: "admin@acme.com",
    },

    {
      id: "2",

      client: "NextGen Solutions",

      packageName: "Growth",

      expiredDate: "28 May 2026",

      daysExpired: 10,

      revenue: "৳ 25,000",

      workspaceStatus: "Grace Period",

      status: "Expired",

      email: "contact@nextgen.com",
    },
  ];
  return (
    <>
      <div className="space-y-8">
        <div>
          <h1 className="text-4xl font-black tracking-tight">Expired Plans</h1>

          <p className="mt-2 text-muted-foreground">
            Manage expired subscriptions, recover lost revenue and reactivate
            client workspaces.
          </p>
        </div>

        <ExpiredPlansStats />

        <div className="rounded-[32px] border border-border bg-card/60 p-6 shadow-2xl backdrop-blur-xl lg:p-8">
          <div className="mb-8">
            <h2 className="text-2xl font-black tracking-tight">
              Expired Subscription Directory
            </h2>

            <p className="mt-2 text-muted-foreground">
              Review expired subscriptions and take recovery actions.
            </p>
          </div>

          <ExpiredPlansToolbar />

          <div className="mt-8">
            <ExpiredPlansTable
              subscriptions={subscriptions}
              onReactivate={(subscription) => {
                setSelectedSubscription(subscription);

                setReactivateOpen(true);
              }}
              onGenerateInvoice={(subscription) => {
                setSelectedSubscription(subscription);

                setInvoiceOpen(true);
              }}
              onContactClient={(subscription) => {
                setSelectedSubscription(subscription);

                setContactOpen(true);
              }}
            />
          </div>
        </div>
      </div>

      <ReactivateSubscriptionDialog
        open={reactivateOpen}
        onOpenChange={setReactivateOpen}
        subscription={selectedSubscription}
      />

      <SendReminderDialog
        open={contactOpen}
        onOpenChange={setContactOpen}
        renewal={
          selectedSubscription
            ? {
                id: selectedSubscription.id,
                client: selectedSubscription.client,
                packageName: selectedSubscription.packageName,
                renewalDate: "",
                daysLeft: 0,
                amount: selectedSubscription.revenue,
                manager: "",
                status: selectedSubscription.status,
                email: selectedSubscription.email,
              }
            : null
        }
      />

      <GenerateInvoiceModal
        open={invoiceOpen}
        onOpenChange={setInvoiceOpen}
        subscription={
          selectedSubscription
            ? {
                id: selectedSubscription.id,
                client: selectedSubscription.client,
                packageName: selectedSubscription.packageName,
                billingCycle: "",
                startDate: "",
                expiryDate: "",
                revenue: selectedSubscription.revenue,
                status: selectedSubscription.status,
              }
            : null
        }
      />
    </>
  );
}

export default ExpiredPlansPage;
