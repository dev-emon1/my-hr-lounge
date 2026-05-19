import LoginPage from "@/modules/auth/pages/login-page";

import { createBrowserRouter, RouterProvider } from "react-router-dom";

import DashboardLayout from "../layouts/dashboard-layout/dashboard-layout";

import ProtectedRoute from "../guard/protected-route";

import UnauthorizedPage from "@/modules/auth/pages/unauthorized-page";

import AuthLayout from "../layouts/auth-layout";

import OverviewPage from "@/modules/dashboard/pages/overview-page";

import RevenueOverviewPage from "@/modules/dashboard/pages/revenue-overview-page";

import ClientAnalyticsPage from "@/modules/dashboard/pages/client-analytics-page";

const router = createBrowserRouter([
  {
    path: "/login",

    element: (
      <AuthLayout>
        <LoginPage />
      </AuthLayout>
    ),
  },

  {
    path: "/unauthorized",

    element: <UnauthorizedPage />,
  },

  {
    path: "/",

    element: (
      <ProtectedRoute>
        <DashboardLayout />
      </ProtectedRoute>
    ),

    children: [
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
    ],
  },
]);

function AppRouter() {
  return <RouterProvider router={router} />;
}

export default AppRouter;
