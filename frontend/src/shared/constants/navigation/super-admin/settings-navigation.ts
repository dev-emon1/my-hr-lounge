import {
  Activity,
  Globe,
  Languages,
  Settings,
  ShieldCheck,
  Wallet,
  Wrench,
} from "lucide-react";

import type { NavigationGroup } from "@/shared/types/navigation.types";

export const settingsNavigation: NavigationGroup = {
  title: "Platform Settings",

  items: [
    {
      title: "Platform Settings",

      icon: Settings,

      children: [
        {
          title: "General Settings",

          href: "/settings/general",

          icon: Settings,
        },

        {
          title: "Localization",

          href: "/settings/localization",

          icon: Globe,
        },

        {
          title: "Currency",

          href: "/settings/currency",

          icon: Wallet,
        },

        {
          title: "Timezone",

          href: "/settings/timezone",

          icon: Globe,
        },

        {
          title: "Languages",

          href: "/settings/languages",

          icon: Languages,
        },

        {
          title: "Maintenance Mode",

          href: "/settings/maintenance",

          icon: Wrench,
        },

        {
          title: "Backup Settings",

          href: "/settings/backups",

          icon: Activity,
        },

        {
          title: "Feature Toggles",

          href: "/settings/features",

          icon: ShieldCheck,
        },

        {
          title: "System Preferences",

          href: "/settings/preferences",

          icon: Settings,
        },
      ],
    },
  ],
};
