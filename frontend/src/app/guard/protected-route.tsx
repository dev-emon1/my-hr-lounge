import type { ReactNode } from "react";

import { Navigate } from "react-router-dom";

import { useAppSelector } from "@/shared/hooks/redux";

type Props = {
  children: ReactNode;
};

function ProtectedRoute({ children }: Props) {
  const { isAuthenticated } = useAppSelector((state) => state.auth);

  if (!isAuthenticated) {
    return <Navigate to="/login" replace />;
  }

  return children;
}

export default ProtectedRoute;
