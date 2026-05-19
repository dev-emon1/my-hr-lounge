import {
  Activity,
  BarChart3,
  Blocks,
  Bot,
  BriefcaseBusiness,
  Building2,
  CreditCard,
  FileClock,
  FileText,
  Headphones,
  LayoutDashboard,
  LifeBuoy,
  MessageSquareMore,
  MonitorCog,
  Package,
  Receipt,
  Settings,
  ShieldCheck,
  Sparkles,
  Users,
  Wallet,
  Wrench,
} from "lucide-react";

import type { NavigationItem } from "@/shared/types/navigation.types";

export const superAdminNavigation: NavigationItem[] = [
  {
    title: "Dashboard",

    icon: LayoutDashboard,

    children: [
      {
        title: "Overview",

        href: "/",

        icon: LayoutDashboard,
      },

      {
        title: "Revenue Overview",

        href: "/dashboard/revenue",

        icon: BarChart3,
      },

      {
        title: "Client Analytics",

        href: "/dashboard/clients",

        icon: Building2,
      },

      {
        title: "Live Activity",

        href: "/dashboard/activity",

        icon: Activity,
      },

      {
        title: "Usage Snapshot",

        href: "/dashboard/usage",

        icon: Activity,
      },

      {
        title: "System Health",

        href: "/dashboard/system-health",

        icon: ShieldCheck,
      },
    ],
  },

  // =========================
  // CLIENT MANAGEMENT
  // =========================

  {
    title: "Client Management",

    icon: Building2,

    children: [
      {
        title: "All Clients",

        href: "/clients",

        icon: Building2,
      },

      {
        title: "Create Client",

        href: "/clients/create",

        icon: Building2,
      },

      {
        title: "Client Onboarding",

        href: "/clients/onboarding",

        icon: FileText,
      },

      {
        title: "Branches",

        href: "/clients/branches",

        icon: Building2,
      },

      {
        title: "Subscription Info",

        href: "/clients/subscriptions",

        icon: CreditCard,
      },

      {
        title: "Package Assignment",

        href: "/clients/packages",

        icon: Package,
      },

      {
        title: "Module Access",

        href: "/clients/modules",

        icon: Blocks,
      },

      {
        title: "Storage Usage",

        href: "/clients/storage",

        icon: Activity,
      },

      {
        title: "Branding",

        href: "/clients/branding",

        icon: Sparkles,
      },

      {
        title: "Activity Logs",

        href: "/clients/logs",

        icon: FileClock,
      },
    ],
  },

  // =========================
  // SUBSCRIPTION & BILLING
  // =========================

  {
    title: "Subscription & Billing",

    icon: Wallet,

    children: [
      {
        title: "Active Subscriptions",

        href: "/subscriptions",

        icon: CreditCard,
      },

      {
        title: "Pending Renewals",

        href: "/subscriptions/renewals",

        icon: FileClock,
      },

      {
        title: "Expired Plans",

        href: "/subscriptions/expired",

        icon: CreditCard,
      },

      {
        title: "Manual Payments",

        href: "/billing/payments",

        icon: Wallet,
      },

      {
        title: "Invoices",

        href: "/invoices",

        icon: Receipt,
      },

      {
        title: "Quotations",

        href: "/billing/quotations",

        icon: FileText,
      },

      {
        title: "Billing History",

        href: "/billing/history",

        icon: FileClock,
      },

      {
        title: "Addons",

        href: "/billing/addons",

        icon: Package,
      },

      {
        title: "Discounts",

        href: "/billing/discounts",

        icon: Wallet,
      },

      {
        title: "Renewal Reminders",

        href: "/billing/reminders",

        icon: MessageSquareMore,
      },
    ],
  },

  // =========================
  // PACKAGES & PLANS
  // =========================

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
        title: "Create Package",

        href: "/packages/create",

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
        title: "Employee Limits",

        href: "/packages/employees",

        icon: Users,
      },

      {
        title: "Storage Limits",

        href: "/packages/storage",

        icon: Activity,
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

  // =========================
  // ADMIN & ACCESS CONTROL
  // =========================

  {
    title: "Admin & Access Control",

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
        title: "Suspended Accounts",

        href: "/security/suspended",

        icon: ShieldCheck,
      },

      {
        title: "Access Timeline",

        href: "/security/timeline",

        icon: Activity,
      },
    ],
  },

  // =========================
  // MODULES & FEATURES
  // =========================

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

      {
        title: "Module Dependencies",

        href: "/modules/dependencies",

        icon: Blocks,
      },

      {
        title: "Version Management",

        href: "/modules/versions",

        icon: FileClock,
      },

      {
        title: "API Feature Access",

        href: "/modules/api-access",

        icon: Wrench,
      },
    ],
  },

  // =========================
  // ANALYTICS & INTELLIGENCE
  // =========================

  {
    title: "Analytics & Intelligence",

    icon: BarChart3,

    children: [
      {
        title: "Revenue Analytics",

        href: "/analytics/revenue",

        icon: BarChart3,
      },

      {
        title: "Client Analytics",

        href: "/analytics/clients",

        icon: Building2,
      },

      {
        title: "Usage Analytics",

        href: "/analytics/usage",

        icon: Activity,
      },

      {
        title: "Growth Reports",

        href: "/analytics/growth",

        icon: BarChart3,
      },

      {
        title: "Storage Analytics",

        href: "/analytics/storage",

        icon: Activity,
      },

      {
        title: "Feature Usage",

        href: "/analytics/features",

        icon: Blocks,
      },

      {
        title: "Predictive Insights",

        href: "/analytics/predictive",

        icon: Sparkles,
      },

      {
        title: "AI Recommendations",

        href: "/analytics/ai",

        icon: Bot,
      },

      {
        title: "Export Reports",

        href: "/analytics/reports",

        icon: FileText,
      },
    ],
  },

  // =========================
  // LEADS & ENQUIRIES
  // =========================

  {
    title: "Leads & Enquiries",

    icon: BriefcaseBusiness,

    children: [
      {
        title: "Leads",

        href: "/leads",

        icon: Users,
      },

      {
        title: "Contact Requests",

        href: "/leads/requests",

        icon: MessageSquareMore,
      },

      {
        title: "Meetings",

        href: "/leads/meetings",

        icon: Users,
      },

      {
        title: "Quotations",

        href: "/leads/quotations",

        icon: FileText,
      },

      {
        title: "Follow Ups",

        href: "/leads/follow-ups",

        icon: Activity,
      },

      {
        title: "Client Notes",

        href: "/leads/notes",

        icon: FileText,
      },

      {
        title: "Conversion Tracking",

        href: "/leads/conversions",

        icon: BarChart3,
      },
    ],
  },

  // =========================
  // SUPPORT & SUCCESS
  // =========================

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

  // =========================
  // COMMUNICATION CENTER
  // =========================

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

      {
        title: "Push Notifications",

        href: "/communication/push",

        icon: MessageSquareMore,
      },

      {
        title: "Broadcast Center",

        href: "/communication/broadcast",

        icon: MessageSquareMore,
      },

      {
        title: "Notification Logs",

        href: "/communication/logs",

        icon: FileClock,
      },

      {
        title: "Automation Rules",

        href: "/communication/automation",

        icon: Bot,
      },

      {
        title: "Scheduled Messages",

        href: "/communication/scheduled",

        icon: FileClock,
      },
    ],
  },

  // =========================
  // INTEGRATIONS & APIs
  // =========================

  {
    title: "Integrations & APIs",

    icon: Wrench,

    children: [
      {
        title: "API Keys",

        href: "/integrations/api-keys",

        icon: ShieldCheck,
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

        icon: MessageSquareMore,
      },

      {
        title: "SMS Gateways",

        href: "/integrations/sms-gateways",

        icon: MessageSquareMore,
      },

      {
        title: "Storage Providers",

        href: "/integrations/storage",

        icon: Activity,
      },

      {
        title: "SSO Integrations",

        href: "/integrations/sso",

        icon: ShieldCheck,
      },

      {
        title: "Biometric Devices",

        href: "/integrations/biometric",

        icon: MonitorCog,
      },

      {
        title: "OAuth Apps",

        href: "/integrations/oauth",

        icon: ShieldCheck,
      },
    ],
  },

  // =========================
  // SECURITY & COMPLIANCE
  // =========================

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

        icon: ShieldCheck,
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

        icon: ShieldCheck,
      },
    ],
  },

  // =========================
  // SYSTEM INFRASTRUCTURE
  // =========================

  {
    title: "System Infrastructure",

    icon: MonitorCog,

    children: [
      {
        title: "Server Health",

        href: "/system/server-health",

        icon: Activity,
      },

      {
        title: "Queue Monitoring",

        href: "/system/queues",

        icon: Activity,
      },

      {
        title: "Cache Monitoring",

        href: "/system/cache",

        icon: Activity,
      },

      {
        title: "Cron Jobs",

        href: "/system/cron-jobs",

        icon: FileClock,
      },

      {
        title: "API Logs",

        href: "/system/api-logs",

        icon: FileClock,
      },

      {
        title: "Error Logs",

        href: "/system/error-logs",

        icon: FileClock,
      },

      {
        title: "Storage Monitoring",

        href: "/system/storage-monitoring",

        icon: Activity,
      },

      {
        title: "Database Health",

        href: "/system/database",

        icon: Activity,
      },

      {
        title: "Performance Metrics",

        href: "/system/performance",

        icon: BarChart3,
      },
    ],
  },

  // =========================
  // WHITE LABEL & BRANDING
  // =========================

  {
    title: "White Label & Branding",

    icon: Sparkles,

    children: [
      {
        title: "Tenant Branding",

        href: "/branding/tenant",

        icon: Sparkles,
      },

      {
        title: "Theme Builder",

        href: "/branding/themes",

        icon: Sparkles,
      },

      {
        title: "Logo Management",

        href: "/branding/logos",

        icon: Sparkles,
      },

      {
        title: "Domain Mapping",

        href: "/branding/domains",

        icon: Wrench,
      },

      {
        title: "Email Branding",

        href: "/branding/email",

        icon: MessageSquareMore,
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

        icon: Sparkles,
      },
    ],
  },

  // =========================
  // PLATFORM SETTINGS
  // =========================

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
        title: "Currency",

        href: "/settings/currency",

        icon: Wallet,
      },

      {
        title: "Timezone",

        href: "/settings/timezone",

        icon: Settings,
      },

      {
        title: "Languages",

        href: "/settings/languages",

        icon: Settings,
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

  // =========================
  // AUTOMATION & AI
  // =========================

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
];
