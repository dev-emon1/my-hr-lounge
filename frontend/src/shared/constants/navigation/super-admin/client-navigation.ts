import {
  Activity,
  Blocks,
  Building2,
  CreditCard,
  FileClock,
  Package,
  Sparkles,
} from "lucide-react";

import type { NavigationGroup } from "@/shared/types/navigation.types";

export const clientNavigation: NavigationGroup = {
  title: "Client Management",

  items: [
    {
      title: "Client Management",

      icon: Building2,

      children: [
        {
          title: "All Clients",

          href: "/clients",

          icon: Building2,
        },

        {
          title: "Create Client",

          href: "/clients/create",

          icon: Building2,
        },

        {
          title: "Client Onboarding",

          href: "/clients/onboarding",

          icon: Building2,
        },

        {
          title: "Branches",

          href: "/clients/branches",

          icon: Building2,
        },

        {
          title: "Subscription Info",

          href: "/clients/subscriptions",

          icon: CreditCard,
        },

        {
          title: "Package Assignment",

          href: "/clients/packages",

          icon: Package,
        },

        {
          title: "Module Access",

          href: "/clients/modules",

          icon: Blocks,
        },

        {
          title: "Storage Usage",

          href: "/clients/storage",

          icon: Activity,
        },

        {
          title: "Branding",

          href: "/clients/branding",

          icon: Sparkles,
        },

        {
          title: "Activity Logs",

          href: "/clients/logs",

          icon: FileClock,
        },
      ],
    },
  ],
};
