import {
  Activity,
  BarChart3,
  FileText,
  Headphones,
  LifeBuoy,
  MessageSquareMore,
  ShieldCheck,
} from "lucide-react";

import type { NavigationGroup } from "@/shared/types/navigation.types";

export const supportNavigation: NavigationGroup = {
  title: "Support & Success",

  items: [
    {
      title: "Support & Success",

      icon: Headphones,

      children: [
        {
          title: "Support Tickets",

          href: "/support/tickets",

          icon: LifeBuoy,
        },

        {
          title: "Live Chat",

          href: "/support/chat",

          icon: MessageSquareMore,
        },

        {
          title: "SLA Monitoring",

          href: "/support/sla",

          icon: ShieldCheck,
        },

        {
          title: "Escalations",

          href: "/support/escalations",

          icon: Activity,
        },

        {
          title: "Knowledge Base",

          href: "/support/knowledge-base",

          icon: FileText,
        },

        {
          title: "Client Feedback",

          href: "/support/feedback",

          icon: MessageSquareMore,
        },

        {
          title: "Success Reports",

          href: "/support/reports",

          icon: BarChart3,
        },
      ],
    },
  ],
};
