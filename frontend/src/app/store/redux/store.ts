import { configureStore } from "@reduxjs/toolkit";

import { rootReducer } from "./root-reducer";

import { baseApi } from "@/shared/services/api/base-api";

export const store = configureStore({
  reducer: rootReducer,

  middleware: (getDefaultMiddleware) =>
    getDefaultMiddleware().concat(baseApi.middleware),
});

export type RootState = ReturnType<typeof store.getState>;

export type AppDispatch = typeof store.dispatch;
