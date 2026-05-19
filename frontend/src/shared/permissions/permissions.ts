export const permissions = {
  dashboard: {
    view: "dashboard.view",
  },

  employee: {
    view: "employee.view",

    create: "employee.create",

    update: "employee.update",

    delete: "employee.delete",
  },

  attendance: {
    view: "attendance.view",

    manage: "attendance.manage",
  },

  payroll: {
    view: "payroll.view",

    manage: "payroll.manage",
  },

  leave: {
    view: "leave.view",

    manage: "leave.manage",
  },

  recruitment: {
    view: "recruitment.view",

    manage: "recruitment.manage",
  },

  settings: {
    manage: "settings.manage",
  },
} as const;
