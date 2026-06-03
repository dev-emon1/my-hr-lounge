import { createSlice } from "@reduxjs/toolkit";

import type { AuthUser } from "../types/auth.types";

type AuthState = {
  user: AuthUser | null;

  accessToken: string | null;

  refreshToken: string | null;

  isAuthenticated: boolean;
};

const initialState: AuthState = {
  user: null,

  accessToken: null,

  refreshToken: null,

  isAuthenticated: false,
};

const authSlice = createSlice({
  name: "auth",

  initialState,

  reducers: {
    setCredentials: (
      state,

      action,
    ) => {
      state.user = action.payload.user;

      state.accessToken = action.payload.accessToken;

      state.refreshToken = action.payload.refreshToken;

      state.isAuthenticated = true;
    },

    clearAuth: (state) => {
      state.user = null;

      state.accessToken = null;

      state.refreshToken = null;

      state.isAuthenticated = false;
    },
  },
});

export const {
  setCredentials,

  clearAuth,
} = authSlice.actions;

export default authSlice.reducer;
