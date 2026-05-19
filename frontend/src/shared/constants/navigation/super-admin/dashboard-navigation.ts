import {
  Activity,
  BarChart3,
  Building2,
  LayoutDashboard,
  ShieldCheck,
} from "lucide-react";

import type { NavigationGroup } from "@/shared/types/navigation.types";

export const dashboardNavigation: NavigationGroup = {
  title: "Dashboard",

  items: [
    {
      title: "Dashboard",

      icon: LayoutDashboard,

      children: [
        {
          title: "Overview",

          href: "/",

          icon: LayoutDashboard,
        },

        {
          title: "Revenue Overview",

          href: "/revenue-overview",

          icon: BarChart3,
        },

        {
          title: "Client Analytics",

          href: "/client-analytics",

          icon: Building2,
        },

        {
          title: "Live Activity",

          href: "/live-activity",

          icon: Activity,
        },

        {
          title: "Usage Snapshot",

          href: "/usage-snapshot",

          icon: Activity,
        },

        {
          title: "System Health",

          href: "/system-health",

          icon: ShieldCheck,
        },
      ],
    },
  ],
};
