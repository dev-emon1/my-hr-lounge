import { LogOut } from "lucide-react";
import { useNavigate } from "react-router-dom";
import { Button } from "@/shared/ui/button";

import { useAppDispatch, useAppSelector } from "@/shared/hooks/redux";

import { clearAuth } from "@/modules/auth/store/auth-slice";

import { tokenStorage } from "@/modules/auth/utils/token-storage";

type Props = {
  collapsed: boolean;
};

function SidebarProfile({ collapsed }: Props) {
  const dispatch = useAppDispatch();
  const user = useAppSelector((state) => state.auth.user);

  const navigate = useNavigate();

  if (!user) {
    return null;
  }

  const handleLogout = () => {
    tokenStorage.clearTokens();

    dispatch(clearAuth());

    navigate("/login", {
      replace: true,
    });
  };

  return (
    <div className="border-t border-border p-4">
      <div className="flex items-center gap-3 rounded-2xl border border-border bg-card p-3">
        <div className="flex h-11 w-11 items-center justify-center rounded-2xl bg-primary text-sm font-bold text-primary-foreground">
          {user.name?.charAt(0)}
        </div>

        {!collapsed && (
          <>
            <div className="min-w-0 flex-1">
              <p className="truncate text-sm font-semibold">{user.name}</p>

              <p className="truncate text-xs capitalize text-muted-foreground">
                Super Admin
              </p>
            </div>

            <Button
              size="icon"
              variant="ghost"
              className="rounded-xl"
              onClick={handleLogout}
            >
              <LogOut size={18} />
            </Button>
          </>
        )}
      </div>
    </div>
  );
}

export default SidebarProfile;
