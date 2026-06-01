import { Globe, Mail, Palette, Sparkles, Wrench } from "lucide-react";

import type { NavigationGroup } from "@/shared/types/navigation.types";

export const brandingNavigation: NavigationGroup = {
  title: "White Label & Branding",

  items: [
    {
      title: "White Label & Branding",

      icon: Sparkles,

      children: [
        {
          title: "Client Branding",

          href: "/branding/client",

          icon: Sparkles,
        },

        {
          title: "Theme Builder",

          href: "/branding/themes",

          icon: Palette,
        },

        {
          title: "Logo Management",

          href: "/branding/logos",

          icon: Sparkles,
        },

        {
          title: "Domain Mapping",

          href: "/branding/domains",

          icon: Globe,
        },

        {
          title: "Email Branding",

          href: "/branding/email",

          icon: Mail,
        },

        {
          title: "Login Branding",

          href: "/branding/login",

          icon: Sparkles,
        },

        {
          title: "Custom CSS",

          href: "/branding/custom-css",

          icon: Wrench,
        },

        {
          title: "Brand Presets",

          href: "/branding/presets",

          icon: Palette,
        },
      ],
    },
  ],
};
