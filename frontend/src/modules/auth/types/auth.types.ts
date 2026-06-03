export type AuthUser = {
  id: string;

  name: string;

  email: string;

  status: string;

  role?: string;

  two_factor_enabled: boolean;

  last_login_at: string;
};

export type LoginPayload = {
  email: string;

  password: string;
};

export type LoginResponse = {
  success: boolean;

  message: string;

  data: {
    user: AuthUser;

    tokens: {
      access_token: string;

      refresh_token: string;

      token_type: string;

      expires_in: number;
    };
  };
};
