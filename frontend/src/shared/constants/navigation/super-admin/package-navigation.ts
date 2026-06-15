import {
  Activity,
  Blocks,
  Package,
  ShieldCheck,
  Sparkles,
  Users,
  Wallet,
  Wrench,
} from "lucide-react";

import type { NavigationGroup } from "@/shared/types/navigation.types";

export const packageNavigation: NavigationGroup = {
  title: "Packages & Plans",

  items: [
    {
      title: "Packages & Plans",

      icon: Package,

      children: [
        {
          title: "All Packages",

          href: "/packages",

          icon: Package,
        },

        {
          title: "Package Builder",

          href: "/packages/builder",

          icon: Blocks,
        },

        {
          title: "Feature Matrix",

          href: "/packages/features",

          icon: ShieldCheck,
        },

        {
          title: "Module Assignment",

          href: "/packages/modules",

          icon: Blocks,
        },

        {
          title: "Pricing Rules",

          href: "/packages/pricing",

          icon: Wallet,
        },

        {
          title: "Trial Plans",

          href: "/packages/trials",

          icon: Sparkles,
        },

        {
          title: "Custom Plans",

          href: "/packages/custom",

          icon: Wrench,
        },
      ],
    },
  ],
};
