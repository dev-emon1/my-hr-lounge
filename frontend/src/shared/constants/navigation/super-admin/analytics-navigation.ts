import {
  Activity,
  BarChart3,
  Blocks,
  Bot,
  Building2,
  FileText,
  Sparkles,
} from "lucide-react";

import type { NavigationGroup } from "@/shared/types/navigation.types";

export const analyticsNavigation: NavigationGroup = {
  title: "Analytics & Intelligence",

  items: [
    {
      title: "Analytics & Intelligence",

      icon: BarChart3,

      children: [
        {
          title: "Revenue Analytics",

          href: "/analytics/revenue",

          icon: BarChart3,
        },

        {
          title: "Client Analytics",

          href: "/analytics/clients",

          icon: Building2,
        },

        {
          title: "Usage Analytics",

          href: "/analytics/usage",

          icon: Activity,
        },

        {
          title: "Growth Reports",

          href: "/analytics/growth",

          icon: BarChart3,
        },

        {
          title: "Storage Analytics",

          href: "/analytics/storage",

          icon: Activity,
        },

        {
          title: "Feature Usage",

          href: "/analytics/features",

          icon: Blocks,
        },

        {
          title: "Predictive Insights",

          href: "/analytics/predictive",

          icon: Sparkles,
        },

        {
          title: "AI Recommendations",

          href: "/analytics/ai",

          icon: Bot,
        },

        {
          title: "Export Reports",

          href: "/analytics/reports",

          icon: FileText,
        },
      ],
    },
  ],
};
