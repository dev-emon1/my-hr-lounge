import {
  Activity,
  Building2,
  FileClock,
  ShieldCheck,
  Users,
} from "lucide-react";

import type { NavigationGroup } from "@/shared/types/navigation.types";

export const adminNavigation: NavigationGroup = {
  title: "Admin & Access Control",

  items: [
    {
      title: "Admin Management",

      icon: ShieldCheck,

      children: [
        {
          title: "HR Admins",

          href: "/hr-admins",

          icon: Users,
        },

        {
          title: "Create Admin",

          href: "/hr-admins/create",

          icon: Users,
        },

        {
          title: "Roles",

          href: "/roles",

          icon: ShieldCheck,
        },

        {
          title: "Permissions",

          href: "/permissions",

          icon: ShieldCheck,
        },

        {
          title: "Permission Matrix",

          href: "/permissions/matrix",

          icon: ShieldCheck,
        },

        {
          title: "Multi-company Access",

          href: "/permissions/access",

          icon: Building2,
        },

        {
          title: "Login Sessions",

          href: "/security/sessions",

          icon: ShieldCheck,
        },

        {
          title: "Security Logs",

          href: "/security/logs",

          icon: FileClock,
        },

        {
          title: "Access Timeline",

          href: "/security/timeline",

          icon: Activity,
        },
      ],
    },
  ],
};
