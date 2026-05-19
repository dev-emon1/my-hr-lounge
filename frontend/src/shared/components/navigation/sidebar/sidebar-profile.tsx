import { LogOut } from "lucide-react";

import { Button } from "@/shared/ui/button";

import { useAppDispatch, useAppSelector } from "@/shared/hooks/redux";

import { logout } from "@/modules/auth/store/auth-slice";

type Props = {
  collapsed: boolean;
};

function SidebarProfile({ collapsed }: Props) {
  const dispatch = useAppDispatch();

  const user = useAppSelector((state) => state.auth.user);

  if (!user) {
    return null;
  }

  return (
    <div className="border-t border-border p-4">
      <div className="flex items-center gap-3 rounded-2xl border border-border bg-card p-3">
        <div className="flex h-11 w-11 items-center justify-center rounded-2xl bg-primary text-sm font-bold text-primary-foreground">
          {user.name.charAt(0)}
        </div>

        {!collapsed && (
          <>
            <div className="min-w-0 flex-1">
              <p className="truncate text-sm font-semibold">{user.name}</p>

              <p className="truncate text-xs capitalize text-muted-foreground">
                {user.role.replace("-", " ")}
              </p>
            </div>

            <Button
              size="icon"
              variant="ghost"
              className="rounded-xl"
              onClick={() => dispatch(logout())}
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
