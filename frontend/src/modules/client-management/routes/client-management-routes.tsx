import type { RouteObject } from "react-router-dom";

import AllClientsPage from "../pages/all-clients-page";

import CreateClientPage from "../pages/create-client-page";

export const clientManagementRoutes: RouteObject[] = [
  {
    path: "client-management/all-clients",

    element: <AllClientsPage />,
  },

  {
    path: "client-management/create",

    element: <CreateClientPage />,
  },

  {
    path: "client-management/onboarding",

    element: <CreateClientPage />,
  },
];
