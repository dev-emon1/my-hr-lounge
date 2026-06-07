import { useState } from "react";

import ActiveSubscriptionsStats from "../components/active-subscriptions/active-subscriptions-stats";

import ActiveSubscriptionsToolbar from "../components/active-subscriptions/active-subscriptions-toolbar";

import ActiveSubscriptionsTable from "../components/active-subscriptions/active-subscriptions-table";

import type { Subscription } from "../types/subscription.types";

import RenewSubscriptionModal from "../components/subscription-details/dialogs/renew-subscription-modal";

import UpgradePackageModal from "../components/subscription-details/dialogs/upgrade-package-modal";

import GenerateInvoiceModal from "../components/subscription-details/dialogs/generate-invoice-modal";

function ActiveSubscriptionsPage() {
  const [selectedSubscription, setSelectedSubscription] =
    useState<Subscription | null>(null);

  const [renewOpen, setRenewOpen] = useState(false);

  const [upgradeOpen, setUpgradeOpen] = useState(false);

  const [invoiceOpen, setInvoiceOpen] = useState(false);

  const subscriptions: Subscription[] = [
    {
      id: "1",
      client: "Acme Corporation",
      packageName: "Enterprise",
      billingCycle: "Yearly",
      startDate: "12 May 2026",
      expiryDate: "12 May 2027",
      revenue: "$4,999",
      status: "Active",
    },

    {
      id: "2",
      client: "NextGen Solutions",
      packageName: "Growth",
      billingCycle: "Monthly",
      startDate: "01 Jun 2026",
      expiryDate: "01 Jul 2026",
      revenue: "$499",
      status: "Active",
    },
  ];
  return (
    <>
      <div className="space-y-8">
        <div>
          <h1 className="text-4xl font-black tracking-tight">
            Active Subscriptions
          </h1>

          <p className="mt-2 text-muted-foreground">
            Manage active subscriptions, billing cycles, revenue tracking and
            package assignments.
          </p>
        </div>

        <ActiveSubscriptionsStats />

        <div className="rounded-[32px] border border-border bg-card/60 p-6 shadow-2xl backdrop-blur-xl lg:p-8">
          <div className="mb-8">
            <h2 className="text-2xl font-black tracking-tight">
              Subscription Directory
            </h2>

            <p className="mt-2 text-muted-foreground">
              View and manage all active subscription plans across clients.
            </p>
          </div>

          <ActiveSubscriptionsToolbar />

          <div className="mt-8">
            <ActiveSubscriptionsTable
              subscriptions={subscriptions}
              onRenew={(subscription) => {
                setSelectedSubscription(subscription);

                setRenewOpen(true);
              }}
              onUpgrade={(subscription) => {
                setSelectedSubscription(subscription);

                setUpgradeOpen(true);
              }}
              onGenerateInvoice={(subscription) => {
                setSelectedSubscription(subscription);

                setInvoiceOpen(true);
              }}
            />
          </div>
        </div>
      </div>

      <RenewSubscriptionModal
        open={renewOpen}
        onOpenChange={setRenewOpen}
        subscription={selectedSubscription}
      />

      <UpgradePackageModal
        open={upgradeOpen}
        onOpenChange={setUpgradeOpen}
        subscription={selectedSubscription}
      />

      <GenerateInvoiceModal
        open={invoiceOpen}
        onOpenChange={setInvoiceOpen}
        subscription={selectedSubscription}
      />
    </>
  );
}

export default ActiveSubscriptionsPage;
