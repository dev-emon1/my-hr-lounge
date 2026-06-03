import { createBrowserRouter, RouterProvider } from "react-router-dom";

import LoginPage from "@/modules/auth/pages/login-page";

import UnauthorizedPage from "@/modules/auth/pages/unauthorized-page";

import DashboardLayout from "../layouts/dashboard-layout/dashboard-layout";

import ProtectedRoute from "../guard/protected-route";

import AuthInitializer from "@/modules/auth/components/auth-initializer";

import { dashboardRoutes } from "@/modules/dashboard/routes/dashboard-routes";

import { clientManagementRoutes } from "@/modules/client-management/routes/client-management-routes";

const router = createBrowserRouter([
  {
    path: "/login",

    element: <LoginPage />,
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

    children: [...dashboardRoutes, ...clientManagementRoutes],
  },
]);

function AppRouter() {
  return (
    <>
      <AuthInitializer />

      <RouterProvider router={router} />
    </>
  );
}

export default AppRouter;
