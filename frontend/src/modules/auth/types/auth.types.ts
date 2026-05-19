export type UserRole =
  | "super-admin"
  | "company-admin"
  | "hr-admin"
  | "employee";

export type AuthUser = {
  id: string;

  name: string;

  email: string;

  role: UserRole;

  companyId?: string;
};

export type AuthState = {
  user: AuthUser | null;

  accessToken: string | null;

  isAuthenticated: boolean;
};
