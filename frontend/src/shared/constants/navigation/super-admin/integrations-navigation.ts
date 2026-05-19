import {
  Activity,
  CreditCard,
  Database,
  Fingerprint,
  KeyRound,
  Mail,
  MessageSquareMore,
  ShieldCheck,
  Wrench,
} from "lucide-react";

import type { NavigationGroup } from "@/shared/types/navigation.types";

export const integrationsNavigation: NavigationGroup = {
  title: "Integrations & APIs",

  items: [
    {
      title: "Integrations & APIs",

      icon: Wrench,

      children: [
        {
          title: "API Keys",

          href: "/integrations/api-keys",

          icon: KeyRound,
        },

        {
          title: "Webhooks",

          href: "/integrations/webhooks",

          icon: Activity,
        },

        {
          title: "Payment Gateways",

          href: "/integrations/payment-gateways",

          icon: CreditCard,
        },

        {
          title: "Email Providers",

          href: "/integrations/email-providers",

          icon: Mail,
        },

        {
          title: "SMS Gateways",

          href: "/integrations/sms-gateways",

          icon: MessageSquareMore,
        },

        {
          title: "Storage Providers",

          href: "/integrations/storage-providers",

          icon: Database,
        },

        {
          title: "SSO Integrations",

          href: "/integrations/sso",

          icon: ShieldCheck,
        },

        {
          title: "Biometric Devices",

          href: "/integrations/biometric",

          icon: Fingerprint,
        },

        {
          title: "OAuth Apps",

          href: "/integrations/oauth-apps",

          icon: ShieldCheck,
        },
      ],
    },
  ],
};
