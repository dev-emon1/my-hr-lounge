import type { ReactNode } from "react";

import { Navigate } from "react-router-dom";

import { tokenStorage } from "@/modules/auth/utils/token-storage";

type Props = {
  children: ReactNode;
};

function ProtectedRoute({ children }: Props) {
  const token = tokenStorage.getAccessToken();

  if (!token) {
    return <Navigate to="/login" replace />;
  }

  return children;
}

export default ProtectedRoute;
  