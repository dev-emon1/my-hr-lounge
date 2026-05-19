import { createSlice } from "@reduxjs/toolkit";

import type { AuthState, AuthUser } from "../types/auth.types";

type SetCredentialsPayload = {
  user: AuthUser;

  accessToken: string;
};

const initialState: AuthState = {
  user: null,

  accessToken: null,

  isAuthenticated: false,
};

const authSlice = createSlice({
  name: "auth",

  initialState,

  reducers: {
    setCredentials: (state, action) => {
      state.user = action.payload.user;

      state.accessToken = action.payload.accessToken;

      state.isAuthenticated = true;
    },

    logout: (state) => {
      state.user = null;

      state.accessToken = null;

      state.isAuthenticated = false;
    },
  },
});

export const { setCredentials, logout } = authSlice.actions;

export default authSlice.reducer;
