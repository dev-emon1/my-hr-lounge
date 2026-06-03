import type { RouteObject } from "react-router-dom";

import AllClientsPage from "../pages/all-clients-page";
import ClientOnboardingPage from "../pages/client-onboarding-page";
import ClientDetailsPage from "../pages/client-details-page";
import PackageAssignmentPage from "../pages/package-assignment-page";
import ClientActivityLogsPage from "../pages/client-activity-logs-page";
import SuspendedClientsPage from "../pages/suspended-clients-page";
import ArchivedClientsPage from "../pages/archived-clients-page";

export const clientManagementRoutes: RouteObject[] = [
  {
    path: "client-management/all-clients",

    element: <AllClientsPage />,
  },

  {
    path: "client-management/onboarding",

    element: <ClientOnboardingPage />,
  },

  {
    path: "client-management/clients/:clientId",

    element: <ClientDetailsPage />,
  },

  {
    path: "client-management/packages",

    element: <PackageAssignmentPage />,
  },

  {
    path: "client-management/activity-logs",

    element: <ClientActivityLogsPage />,
  },

  {
    path: "client-management/suspended",

    element: <SuspendedClientsPage />,
  },

  {
    path: "client-management/archived",

    element: <ArchivedClientsPage />,
  },
];
