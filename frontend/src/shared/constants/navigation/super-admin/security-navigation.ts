import {
  Activity,
  FileClock,
  FileText,
  LockKeyhole,
  ShieldAlert,
  ShieldCheck,
} from "lucide-react";

import type { NavigationGroup } from "@/shared/types/navigation.types";

export const securityNavigation: NavigationGroup = {
  title: "Security & Compliance",

  items: [
    {
      title: "Security & Compliance",

      icon: ShieldCheck,

      children: [
        {
          title: "Audit Logs",

          href: "/security/audit-logs",

          icon: FileClock,
        },

        {
          title: "Security Policies",

          href: "/security/policies",

          icon: ShieldCheck,
        },

        {
          title: "2FA",

          href: "/security/2fa",

          icon: LockKeyhole,
        },

        {
          title: "IP Whitelist",

          href: "/security/ip-whitelist",

          icon: ShieldCheck,
        },

        {
          title: "Login Monitoring",

          href: "/security/login-monitoring",

          icon: Activity,
        },

        {
          title: "Compliance Reports",

          href: "/security/compliance",

          icon: FileText,
        },

        {
          title: "Data Retention",

          href: "/security/data-retention",

          icon: FileClock,
        },

        {
          title: "Backup Monitoring",

          href: "/security/backups",

          icon: Activity,
        },

        {
          title: "Threat Detection",

          href: "/security/threats",

          icon: ShieldAlert,
        },
      ],
    },
  ],
};
