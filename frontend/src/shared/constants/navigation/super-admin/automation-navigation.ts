import { Bot, FileClock, FileText, Sparkles } from "lucide-react";

import type { NavigationGroup } from "@/shared/types/navigation.types";

export const automationNavigation: NavigationGroup = {
  title: "Automation & AI",

  items: [
    {
      title: "Automation & AI",

      icon: Bot,

      children: [
        {
          title: "Workflow Automation",

          href: "/automation/workflows",

          icon: Bot,
        },

        {
          title: "AI Configuration",

          href: "/automation/ai-config",

          icon: Bot,
        },

        {
          title: "Smart Suggestions",

          href: "/automation/suggestions",

          icon: Sparkles,
        },

        {
          title: "Scheduled Tasks",

          href: "/automation/tasks",

          icon: FileClock,
        },

        {
          title: "AI Reports",

          href: "/automation/reports",

          icon: FileText,
        },

        {
          title: "AI Logs",

          href: "/automation/logs",

          icon: FileClock,
        },

        {
          title: "Automation Rules",

          href: "/automation/rules",

          icon: Bot,
        },
      ],
    },
  ],
};
