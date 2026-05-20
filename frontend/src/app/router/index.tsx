import { createBrowserRouter, RouterProvider } from "react-router-dom";

import LoginPage from "@/modules/auth/pages/login-page";
import DashboardLayout from "../layouts/dashboard-layout/dashboard-layout";
import ProtectedRoute from "../guard/protected-route";
import UnauthorizedPage from "@/modules/auth/pages/unauthorized-page";
import AuthLayout from "../layouts/auth-layout";
import OverviewPage from "@/modules/dashboard/pages/overview-page";
import RevenueOverviewPage from "@/modules/dashboard/pages/revenue-overview-page";
import ClientAnalyticsPage from "@/modules/dashboard/pages/client-analytics-page";
import LiveActivityPage from "@/modules/dashboard/pages/live-activity-page";
import UsageSnapshotPage from "@/modules/dashboard/pages/usage-snapshot-page";
import SystemHealthPage from "@/modules/dashboard/pages/system-health-page";

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
    ],
  },
]);

function AppRouter() {
  return <RouterProvider router={router} />;
}

export default AppRouter;
