import { combineReducers } from "@reduxjs/toolkit";

import authReducer from "@/modules/auth/store/auth-slice";

import { baseApi } from "@/shared/services/api/base-api";

export const rootReducer = combineReducers({
  auth: authReducer,

  [baseApi.reducerPath]: baseApi.reducer,
});
