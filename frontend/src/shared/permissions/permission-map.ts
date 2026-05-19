import { permissions } from "./permissions";

import type { SystemRole } from "./roles";

export const permissionMap: Record<SystemRole, string[]> = {
  "super-admin": ["*"],

  "company-admin": [
    permissions.dashboard.view,

    permissions.employee.view,
    permissions.employee.create,
    permissions.employee.update,
    permissions.employee.delete,

    permissions.attendance.view,
    permissions.attendance.manage,

    permissions.payroll.view,
    permissions.payroll.manage,

    permissions.leave.view,
    permissions.leave.manage,

    permissions.recruitment.view,
    permissions.recruitment.manage,

    permissions.settings.manage,
  ],

  "hr-admin": [
    permissions.dashboard.view,

    permissions.employee.view,
    permissions.employee.create,
    permissions.employee.update,

    permissions.attendance.view,
    permissions.attendance.manage,

    permissions.leave.view,
    permissions.leave.manage,

    permissions.recruitment.view,
  ],

  employee: [
    permissions.dashboard.view,

    permissions.attendance.view,

    permissions.leave.view,
  ],
};
