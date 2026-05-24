import { combineReducers } from "@reduxjs/toolkit";

import { baseApi } from "@/shared/services/api/base-api";

import authReducer from "@/modules/auth/store/auth-slice";

export const rootReducer = combineReducers({
  [baseApi.reducerPath]: baseApi.reducer,

  auth: authReducer,
});
