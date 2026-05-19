export function hasPermission(
  userPermissions: string[],
  requiredPermission: string,
) {
  if (userPermissions.includes("*")) {
    return true;
  }

  return userPermissions.includes(requiredPermission);
}
