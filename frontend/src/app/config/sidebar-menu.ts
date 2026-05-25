import {
  LayoutDashboard,
  BarChart3,
  Activity,
  ShieldCheck,
  Building2,
  Boxes,
  HardDrive,
  Sparkles,
  ClipboardList,
} from "lucide-react";

export const sidebarMenu = [
  {
    title: "Dashboard",

    items: [
      {
        title: "Dashboard",

        icon: LayoutDashboard,

        children: [
          {
            title: "Overview",

            path: "/",
          },

          {
            title: "Revenue Overview",

            path: "/revenue-overview",
          },

          {
            title: "Client Analytics",

            path: "/client-analytics",
          },

          {
            title: "Live Activity",

            path: "/live-activity",
          },

          {
            title: "Usage Snapshot",

            path: "/usage-snapshot",
          },

          {
            title: "System Health",

            path: "/system-health",
          },
        ],
      },
    ],
  },

  {
    title: "Client Management",

    items: [
      {
        title: "Client Management",

        icon: Building2,

        children: [
          {
            title: "All Clients",

            path: "/client-management/all-clients",
          },

          {
            title: "Create Client",

            path: "/client-management/create-client",
          },

          {
            title: "Client Onboarding",

            path: "/client-management/client-onboarding",
          },

          {
            title: "Branches",

            path: "/client-management/branches",
          },

          {
            title: "Subscription Info",

            path: "/client-management/subscription-info",

            icon: ClipboardList,
          },

          {
            title: "Package Assignment",

            path: "/client-management/package-assignment",

            icon: Boxes,
          },

          {
            title: "Module Access",

            path: "/client-management/module-access",

            icon: Boxes,
          },

          {
            title: "Storage Usage",

            path: "/client-management/storage-usage",

            icon: Activity,
          },

          {
            title: "Branding",

            path: "/client-management/branding",

            icon: Sparkles,
          },

          {
            title: "Activity Logs",

            path: "/client-management/activity-logs",

            icon: ShieldCheck,
          },
        ],
      },
    ],
  },
];
