import type { RouteObject } from "react-router-dom";

import ActiveSubscriptionsPage from "../pages/active-subscriptions-page";
import SubscriptionDetailsPage from "../pages/subscription-details-page";
import PendingRenewalsPage from "../pages/pending-renewals-page";
import ExpiredPlansPage from "../pages/expired-plans-page";
import InvoicesPage from "../pages/invoices-page";
import InvoiceDetailsPage from "../pages/invoice-details-page";
// import PendingRenewalsPage from "../pages/pending-renewals-page";
// import ExpiredPlansPage from "../pages/expired-plans-page";
// import InvoicesPage from "../pages/invoices-page";
// import TransactionsPage from "../pages/transactions-page";
// import ManualPaymentsPage from "../pages/manual-payments-page";
// import AddonsPage from "../pages/addons-page";
// import QuotationsPage from "../pages/quotations-page";
// import SubscriptionChangesPage from "../pages/subscription-changes-page";

export const subscriptionBillingRoutes: RouteObject[] = [
  {
    path: "subscriptions/active-subscriptions",

    element: <ActiveSubscriptionsPage />,
  },

  {
    path: "subscription-billing/subscriptions/:subscriptionId",

    element: <SubscriptionDetailsPage />,
  },

  {
    path: "/subscriptions/renewals",

    element: <PendingRenewalsPage />,
  },

  {
    path: "subscriptions/expired-plans",

    element: <ExpiredPlansPage />,
  },

  {
    path: "billing/invoices",

    element: <InvoicesPage />,
  },

  {
    path: `billing/invoices/:invoiceId`,

    element: <InvoiceDetailsPage />,
  },

  {
    path: "subscription-billing/transactions",

    element: "<TransactionsPage />",
  },

  {
    path: "subscription-billing/manual-payments",

    element: "<ManualPaymentsPage />",
  },

  {
    path: "subscription-billing/addons",

    element: "<AddonsPage />",
  },

  {
    path: "subscription-billing/quotations",

    element: "<QuotationsPage />",
  },

  {
    path: "subscription-billing/subscription-changes",

    element: "<SubscriptionChangesPage />",
  },
];
