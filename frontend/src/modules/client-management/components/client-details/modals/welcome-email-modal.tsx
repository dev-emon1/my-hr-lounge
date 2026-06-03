import {
  Dialog,
  DialogContent,
  DialogDescription,
  DialogFooter,
  DialogHeader,
  DialogTitle,
} from "@/shared/ui/dialog";

import { Button } from "@/shared/ui/button";

import { Input } from "@/shared/ui/input";

import { Label } from "@/shared/ui/label";

import { Textarea } from "@/shared/ui/textarea";

type Props = {
  open: boolean;

  onOpenChange: (open: boolean) => void;
};

function WelcomeEmailModal({ open, onOpenChange }: Props) {
  return (
    <Dialog open={open} onOpenChange={onOpenChange}>
      <DialogContent className="max-w-3xl">
        <DialogHeader>
          <DialogTitle>Send Welcome Email</DialogTitle>

          <DialogDescription>
            Send onboarding email to the client administrator.
          </DialogDescription>
        </DialogHeader>

        <div className="space-y-5 p-6">
          <div>
            <Label>Recipient</Label>

            <Input defaultValue="admin@acme.com" />
          </div>

          <div>
            <Label>Subject</Label>

            <Input defaultValue="Welcome to HR Lounge" />
          </div>

          <div>
            <Label>Message</Label>

            <Textarea rows={8} defaultValue="Welcome to HR Lounge..." />
          </div>
        </div>

        <DialogFooter>
          <Button variant="outline" onClick={() => onOpenChange(false)}>
            Cancel
          </Button>

          <Button>Send Email</Button>
        </DialogFooter>
      </DialogContent>
    </Dialog>
  );
}

export default WelcomeEmailModal;
