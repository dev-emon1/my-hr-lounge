import { useEffect } from "react";

import { useAppDispatch } from "@/shared/hooks/redux";

import { tokenStorage } from "../utils/token-storage";

import { setCredentials } from "../store/auth-slice";

function AuthInitializer() {
  const dispatch = useAppDispatch();

  useEffect(() => {
    const accessToken = tokenStorage.getAccessToken();

    const refreshToken = tokenStorage.getRefreshToken();

    if (accessToken) {
      dispatch(
        setCredentials({
          user: {
            name: "Super Admin",
            email: "admin@myhrlounge.com",
          },

          accessToken,

          refreshToken,

          isAuthenticated: true,
        }),
      );
    }
  }, [dispatch]);

  return null;
}

export default AuthInitializer;
