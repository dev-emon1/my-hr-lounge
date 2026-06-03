import {
  Dialog,
  DialogContent,
  DialogDescription,
  DialogFooter,
  DialogHeader,
  DialogTitle,
} from "@/shared/ui/dialog";

import { Button } from "@/shared/ui/button";

type Props = {
  open: boolean;

  onOpenChange: (open: boolean) => void;
};

function LoginAsAdminDialog({ open, onOpenChange }: Props) {
  return (
    <Dialog open={open} onOpenChange={onOpenChange}>
      <DialogContent className="max-w-xl">
        <DialogHeader>
          <DialogTitle>Login As Admin</DialogTitle>

          <DialogDescription>
            You are about to access this client workspace.
          </DialogDescription>
        </DialogHeader>

        <div className="p-6">
          <div className="rounded-2xl border p-5">
            <h4 className="font-bold">Acme Corporation</h4>

            <p className="mt-2 text-muted-foreground">
              Workspace Admin impersonation session will start.
            </p>
          </div>
        </div>

        <DialogFooter>
          <Button variant="outline" onClick={() => onOpenChange(false)}>
            Cancel
          </Button>

          <Button>Continue</Button>
        </DialogFooter>
      </DialogContent>
    </Dialog>
  );
}

export default LoginAsAdminDialog;
