import { CreditCard, FileClock, FileText, Package, Wallet } from "lucide-react";

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

          href: "/subscriptions",

          icon: CreditCard,
        },

        {
          title: "Pending Renewals",

          href: "/subscriptions/renewals",

          icon: FileClock,
        },

        {
          title: "Expired Plans",

          href: "/subscriptions/expired",

          icon: CreditCard,
        },

        {
          title: "Manual Payments",

          href: "/billing/payments",

          icon: Wallet,
        },

        {
          title: "Invoices",

          href: "/billing/invoices",

          icon: FileText,
        },

        {
          title: "Quotations",

          href: "/billing/quotations",

          icon: FileText,
        },

        {
          title: "Billing History",

          href: "/billing/history",

          icon: FileClock,
        },

        {
          title: "Addons",

          href: "/billing/addons",

          icon: Package,
        },
      ],
    },
  ],
};
