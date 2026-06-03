import { useState } from "react";

import {
  Dialog,
  DialogContent,
  DialogDescription,
  DialogFooter,
  DialogHeader,
  DialogTitle,
} from "@/shared/ui/dialog";

import { Button } from "@/shared/ui/button";

import { Checkbox } from "@/shared/ui/checkbox";

type Props = {
  open: boolean;

  onOpenChange: (open: boolean) => void;
};

function ResetWorkspaceDialog({ open, onOpenChange }: Props) {
  const [branding, setBranding] = useState(false);

  const [modules, setModules] = useState(false);

  const [configuration, setConfiguration] = useState(false);

  const [everything, setEverything] = useState(false);

  return (
    <Dialog open={open} onOpenChange={onOpenChange}>
      <DialogContent className="max-w-2xl">
        <DialogHeader>
          <DialogTitle>Reset Workspace</DialogTitle>

          <DialogDescription>
            Dangerous operation. Select exactly what should be reset.
          </DialogDescription>
        </DialogHeader>

        <div className="space-y-5 p-6">
          <div className="flex items-center gap-3">
            <Checkbox
              checked={branding}
              onCheckedChange={(v) => setBranding(Boolean(v))}
            />

            <span>Reset Branding</span>
          </div>

          <div className="flex items-center gap-3">
            <Checkbox
              checked={modules}
              onCheckedChange={(v) => setModules(Boolean(v))}
            />

            <span>Reset Modules</span>
          </div>

          <div className="flex items-center gap-3">
            <Checkbox
              checked={configuration}
              onCheckedChange={(v) => setConfiguration(Boolean(v))}
            />

            <span>Reset Configuration</span>
          </div>

          <div className="flex items-center gap-3">
            <Checkbox
              checked={everything}
              onCheckedChange={(v) => setEverything(Boolean(v))}
            />

            <span className="font-semibold text-destructive">
              Reset Entire Workspace
            </span>
          </div>

          <div className="rounded-2xl border border-destructive/30 bg-destructive/5 p-5">
            <p className="font-semibold text-destructive">
              This action may remove configuration permanently.
            </p>
          </div>
        </div>

        <DialogFooter>
          <Button variant="outline" onClick={() => onOpenChange(false)}>
            Cancel
          </Button>

          <Button variant="destructive">Reset Workspace</Button>
        </DialogFooter>
      </DialogContent>
    </Dialog>
  );
}

export default ResetWorkspaceDialog;
