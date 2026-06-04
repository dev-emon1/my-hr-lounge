import {
  CreditCard,
  FileClock,
  FileText,
  Package,
  Wallet,
  ArrowUpDown,
  RefreshCw,
} from "lucide-react";

import type { NavigationGroup } from "@/shared/types/navigation.types";

export const subscriptionNavigation: NavigationGroup = {
  title: "Subscription & Billing",

  items: [
    {
      title: "Subscription & Billing",

      icon: Wallet,

      children: [
        {
          title: "Active Subscriptions",

          href: "/subscriptions/active-subscriptions",

          icon: CreditCard,
        },

        {
          title: "Pending Renewals",

          href: "/subscriptions/renewals",

          icon: RefreshCw,
        },

        {
          title: "Expired Plans",

          href: "/subscriptions/expired",

          icon: FileClock,
        },

        {
          title: "Invoices",

          href: "/billing/invoices",

          icon: FileText,
        },

        {
          title: "Transactions",

          href: "/billing/transactions",

          icon: ArrowUpDown,
        },

        {
          title: "Manual Payments",

          href: "/billing/manual-payments",

          icon: Wallet,
        },

        {
          title: "Addons",

          href: "/billing/addons",

          icon: Package,
        },

        {
          title: "Quotations",

          href: "/billing/quotations",

          icon: FileText,
        },

        {
          title: "Subscription Changes",

          href: "/billing/subscription-changes",

          icon: RefreshCw,
        },
      ],
    },
  ],
};
