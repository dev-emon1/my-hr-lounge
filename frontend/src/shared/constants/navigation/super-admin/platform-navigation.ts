import {
  Blocks,
  Bot,
  CreditCard,
  MessageSquareMore,
  MonitorCog,
  Settings,
  ShieldCheck,
  Sparkles,
  Wrench,
} from "lucide-react";

import type { NavigationGroup } from "@/shared/types/navigation.types";

export const platformNavigation: NavigationGroup = {
  title: "Platform",

  items: [
    {
      title: "Modules & Features",

      icon: Blocks,

      children: [
        {
          title: "All Modules",

          href: "/modules",

          icon: Blocks,
        },

        {
          title: "Feature Flags",

          href: "/modules/flags",

          icon: ShieldCheck,
        },

        {
          title: "Module Assignment",

          href: "/modules/assignment",

          icon: Blocks,
        },

        {
          title: "Beta Features",

          href: "/modules/beta",

          icon: Sparkles,
        },
      ],
    },

    {
      title: "Communication Center",

      icon: MessageSquareMore,

      children: [
        {
          title: "Email Templates",

          href: "/communication/email",

          icon: MessageSquareMore,
        },

        {
          title: "SMS Templates",

          href: "/communication/sms",

          icon: MessageSquareMore,
        },

        {
          title: "WhatsApp Templates",

          href: "/communication/whatsapp",

          icon: MessageSquareMore,
        },
      ],
    },

    {
      title: "Integrations & APIs",

      icon: Wrench,

      children: [
        {
          title: "Payment Gateways",

          href: "/integrations/payment",

          icon: CreditCard,
        },

        {
          title: "API Keys",

          href: "/integrations/api",

          icon: ShieldCheck,
        },

        {
          title: "Biometric Devices",

          href: "/integrations/biometric",

          icon: MonitorCog,
        },
      ],
    },

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

          icon: Settings,
        },

        {
          title: "Maintenance Mode",

          href: "/settings/maintenance",

          icon: Wrench,
        },
      ],
    },

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

          href: "/automation/config",

          icon: Bot,
        },
      ],
    },
  ],
};
