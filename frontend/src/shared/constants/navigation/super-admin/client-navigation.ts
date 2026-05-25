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

          href: "/client-management/all-clients",

          icon: Building2,
        },

        {
          title: "Create Client",

          href: "/client-management/create",

          icon: Building2,
        },

        {
          title: "Client Onboarding",

          href: "/client-management/onboarding",

          icon: Building2,
        },

        {
          title: "Branches",

          href: "/client-management/branches",

          icon: Building2,
        },

        {
          title: "Subscription Info",

          href: "/client-management/subscriptions",

          icon: CreditCard,
        },

        {
          title: "Package Assignment",

          href: "/client-management/packages",

          icon: Package,
        },

        {
          title: "Module Access",

          href: "/client-management/modules",

          icon: Blocks,
        },

        {
          title: "Storage Usage",

          href: "/client-management/storage",

          icon: Activity,
        },

        {
          title: "Branding",

          href: "/client-management/branding",

          icon: Sparkles,
        },

        {
          title: "Activity Logs",

          href: "/client-management/logs",

          icon: FileClock,
        },
      ],
    },
  ],
};
