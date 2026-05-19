import type { ReactNode } from "react";

import { Navigate } from "react-router-dom";

import { useAppSelector } from "@/shared/hooks/redux";

import { permissionMap } from "@/shared/permissions/permission-map";

import { hasPermission } from "@/shared/permissions/has-permission";

type Props = {
  children: ReactNode;

  requiredPermission: string;
};

function PermissionRoute({ children, requiredPermission }: Props) {
  const user = useAppSelector((state) => state.auth.user);

  if (!user) {
    return <Navigate to="/login" replace />;
  }

  const userPermissions = permissionMap[user.role];

  const allowed = hasPermission(userPermissions, requiredPermission);

  if (!allowed) {
    return <Navigate to="/unauthorized" replace />;
  }

  return children;
}

export default PermissionRoute;
