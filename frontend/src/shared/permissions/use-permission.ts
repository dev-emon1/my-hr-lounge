import { useAppSelector } from "@/shared/hooks/redux";

import { permissionMap } from "./permission-map";

import { hasPermission } from "./has-permission";

export function usePermission(requiredPermission: string) {
  const user = useAppSelector((state) => state.auth.user);

  if (!user) {
    return false;
  }

  const permissions = permissionMap[user.role];

  return hasPermission(permissions, requiredPermission);
}
