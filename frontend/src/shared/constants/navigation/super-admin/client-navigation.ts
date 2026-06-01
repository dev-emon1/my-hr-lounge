import { Building2, FileClock, Package, UserX, Archive } from "lucide-react";

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
          title: "Client Onboarding",

          href: "/client-management/onboarding",

          icon: Building2,
        },

        {
          title: "Package Assignment",

          href: "/client-management/packages",

          icon: Package,
        },

        {
          title: "Client Activity Logs",

          href: "/client-management/activity-logs",

          icon: FileClock,
        },

        {
          title: "Suspended Clients",

          href: "/client-management/suspended",

          icon: UserX,
        },

        {
          title: "Archived Clients",

          href: "/client-management/archived",

          icon: Archive,
        },
      ],
    },
  ],
};
