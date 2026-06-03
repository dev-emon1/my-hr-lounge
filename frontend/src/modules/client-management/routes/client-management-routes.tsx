import type { RouteObject } from "react-router-dom";

import AllClientsPage from "../pages/all-clients-page";
import ClientOnboardingPage from "../pages/client-onboarding-page";
import ClientDetailsPage from "../pages/client-details-page";

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
];
