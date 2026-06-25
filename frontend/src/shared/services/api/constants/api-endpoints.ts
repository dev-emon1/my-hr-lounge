export const API_ENDPOINTS = {
  AUTH: {
    LOGIN: "/sa/auth/login",

    REFRESH: "/sa/auth/refresh",

    ME: "/sa/auth/me",

    LOGOUT: "/sa/auth/logout",

    LOGOUT_ALL: "/sa/auth/logout-all",

    SESSIONS: "/sa/auth/sessions",
  },

  DASHBOARD: {
    STATS: "/sa/dashboard",
  },

  PACKAGES: {
    LIST: "/sa/public/packages",

    CREATE: "/sa/packages",

    DETAILS: (packageCode: string) => `/sa/packages/${packageCode}`,

    UPDATE: (id: string) => `/sa/packages/${id}`,

    DELETE: (id: string) => `/sa/packages/${id}`,
  },

  TENANTS: {
    LIST: "/sa/tenants",

    CREATE: "/sa/tenants",

    DETAILS: (id: string) => `/sa/tenants/${id}`,

    UPDATE: (id: string) => `/sa/tenants/${id}`,

    SUSPEND: (id: string) => `/sa/tenants/${id}/suspend`,

    ACTIVATE: (id: string) => `/sa/tenants/${id}/activate`,
  },
};
