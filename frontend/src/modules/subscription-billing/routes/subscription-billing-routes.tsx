import type { RouteObject } from "react-router-dom";

import ActiveSubscriptionsPage from "../pages/active-subscriptions-page";
import SubscriptionDetailsPage from "../pages/subscription-details-page";
import PendingRenewalsPage from "../pages/pending-renewals-page";
import ExpiredPlansPage from "../pages/expired-plans-page";
import InvoicesPage from "../pages/invoices-page";
import InvoiceDetailsPage from "../pages/invoice-details-page";
import TransactionsPage from "../pages/transactions-page";
import TransactionDetailsPage from "../pages/transaction-details-page";
import QuotationsPage from "../pages/quotations-page";
import QuotationDetailsPage from "../pages/quotations-details-page";
import CreateQuotationPage from "../pages/create-quotation-page";
import EditQuotationPage from "../pages/quotation-edit-page";
import QuotationPreviewPage from "../pages/quotation-preview-page";
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
    path: "/billing/transactions",

    element: <TransactionsPage />,
  },

  {
    path: "subscription-billing/transactions/:transactionId",

    element: <TransactionDetailsPage />,
  },

  {
    path: "subscription-billing/addons",

    element: "<AddonsPage />",
  },

  {
    path: "billing/quotations",

    element: <QuotationsPage />,
  },

  {
    path: "billing/quotations/:quotationId",

    element: <QuotationDetailsPage />,
  },

  {
    path: "billing/quotations/create",

    element: <CreateQuotationPage />,
  },

  {
    path: "billing/quotations/:quotationId/edit",

    element: <EditQuotationPage />,
  },

  {
    path: "billing/quotations/:quotationId/preview",

    element: <QuotationPreviewPage />,
  },

  {
    path: "subscription-billing/subscription-changes",

    element: "<SubscriptionChangesPage />",
  },
];
