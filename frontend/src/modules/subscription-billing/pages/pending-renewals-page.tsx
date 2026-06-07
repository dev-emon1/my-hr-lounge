import { useState } from "react";

import PendingRenewalsStats from "../components/pending-renewals/pending-renewals-stats";

import PendingRenewalsToolbar from "../components/pending-renewals/pending-renewals-toolbar";

import PendingRenewalsTable from "../components/pending-renewals/pending-renewals-table";

import type { Renewal } from "../types/renewal.types";

import RenewNowDialog from "../components/pending-renewals/dialogs/renew-now-dialog";

import SendReminderDialog from "../components/pending-renewals/dialogs/send-reminder-dialog";

import GenerateInvoiceModal from "../components/subscription-details/dialogs/generate-invoice-modal";

function PendingRenewalsPage() {
  const [selectedRenewal, setSelectedRenewal] = useState<Renewal | null>(null);

  const [renewOpen, setRenewOpen] = useState(false);

  const [reminderOpen, setReminderOpen] = useState(false);

  const [invoiceOpen, setInvoiceOpen] = useState(false);

  const renewals: Renewal[] = [
    {
      id: "1",
      client: "Acme Corporation",
      packageName: "Enterprise",
      renewalDate: "12 Jun 2026",
      daysLeft: 2,
      amount: "$4,999",
      manager: "John Smith",
      status: "Pending",
      email: "admin@acme.com",
    },

    {
      id: "2",
      client: "NextGen Solutions",
      packageName: "Growth",
      renewalDate: "08 Jun 2026",
      daysLeft: -2,
      amount: "$499",
      manager: "Sarah Ahmed",
      status: "Expired",
      email: "contact@nextgen.com",
    },
  ];
  return (
    <>
      <div className="space-y-8">
        <div>
          <h1 className="text-4xl font-black tracking-tight">
            Pending Renewals
          </h1>

          <p className="mt-2 text-muted-foreground">
            Monitor upcoming renewals, overdue subscriptions and revenue at
            risk.
          </p>
        </div>

        <PendingRenewalsStats />

        <div className="rounded-[32px] border border-border bg-card/60 p-6 shadow-2xl backdrop-blur-xl lg:p-8">
          <div className="mb-8">
            <h2 className="text-2xl font-black tracking-tight">
              Renewal Pipeline
            </h2>

            <p className="mt-2 text-muted-foreground">
              Track renewal activities and take action before subscriptions
              expire.
            </p>
          </div>

          <PendingRenewalsToolbar />

          <div className="mt-8">
            <PendingRenewalsTable
              renewals={renewals}
              onRenew={(renewal) => {
                setSelectedRenewal(renewal);

                setRenewOpen(true);
              }}
              onReminder={(renewal) => {
                setSelectedRenewal(renewal);

                setReminderOpen(true);
              }}
              onGenerateInvoice={(renewal) => {
                setSelectedRenewal(renewal);

                setInvoiceOpen(true);
              }}
            />
          </div>
        </div>
      </div>

      <RenewNowDialog
        open={renewOpen}
        onOpenChange={setRenewOpen}
        renewal={selectedRenewal}
      />

      <SendReminderDialog
        open={reminderOpen}
        onOpenChange={setReminderOpen}
        renewal={selectedRenewal}
      />

      <GenerateInvoiceModal
        open={invoiceOpen}
        onOpenChange={setInvoiceOpen}
        subscription={
          selectedRenewal
            ? {
                id: selectedRenewal.id,
                client: selectedRenewal.client,
                packageName: selectedRenewal.packageName,
                billingCycle: "",
                startDate: "",
                expiryDate: "",
                revenue: selectedRenewal.amount,
                status: selectedRenewal.status,
              }
            : null
        }
      />
    </>
  );
}

export default PendingRenewalsPage;
