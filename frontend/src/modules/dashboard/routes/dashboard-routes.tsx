import type { RouteObject } from "react-router-dom";

import OverviewPage from "../pages/overview-page";

import RevenueOverviewPage from "../pages/revenue-overview-page";

import ClientAnalyticsPage from "../pages/client-analytics-page";

import LiveActivityPage from "../pages/live-activity-page";

import UsageSnapshotPage from "../pages/usage-snapshot-page";

import SystemHealthPage from "../pages/system-health-page";

export const dashboardRoutes: RouteObject[] = [
  {
    index: true,

    element: <OverviewPage />,
  },

  {
    path: "revenue-overview",

    element: <RevenueOverviewPage />,
  },

  {
    path: "client-analytics",

    element: <ClientAnalyticsPage />,
  },

  {
    path: "live-activity",

    element: <LiveActivityPage />,
  },

  {
    path: "usage-snapshot",

    element: <UsageSnapshotPage />,
  },

  {
    path: "system-health",

    element: <SystemHealthPage />,
  },
];
