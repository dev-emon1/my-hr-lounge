export const API_ENDPOINTS = {
  AUTH: {
    LOGIN: "/auth/login",

    REFRESH: "/auth/refresh",
  },

  COMPANIES: {
    LIST: "/companies",

    CREATE: "/companies",

    UPDATE: (id: string) => `/companies/${id}`,

    DELETE: (id: string) => `/companies/${id}`,
  },

  DASHBOARD: {
    STATS: "/dashboard/stats",
  },
};
