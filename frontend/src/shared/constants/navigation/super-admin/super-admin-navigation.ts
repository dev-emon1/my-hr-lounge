import { adminNavigation } from "./admin-navigation";

import { analyticsNavigation } from "./analytics-navigation";

import { automationNavigation } from "./automation-navigation";

import { brandingNavigation } from "./branding-navigation";

import { clientNavigation } from "./client-navigation";

import { dashboardNavigation } from "./dashboard-navigation";

import { integrationsNavigation } from "./integrations-navigation";

import { packageNavigation } from "./package-navigation";

import { platformNavigation } from "./platform-navigation";

import { securityNavigation } from "./security-navigation";

import { settingsNavigation } from "./settings-navigation";

import { subscriptionNavigation } from "./subscription-navigation";

import { supportNavigation } from "./support-navigation";

export const superAdminNavigation = [
  dashboardNavigation,

  clientNavigation,

  subscriptionNavigation,

  packageNavigation,

  adminNavigation,

  analyticsNavigation,

  supportNavigation,

  platformNavigation,

  integrationsNavigation,

  securityNavigation,

  brandingNavigation,

  settingsNavigation,

  automationNavigation,
];
