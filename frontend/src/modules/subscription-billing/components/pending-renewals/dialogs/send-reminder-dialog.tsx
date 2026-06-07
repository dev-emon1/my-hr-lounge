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

import {
  Select,
  SelectContent,
  SelectItem,
  SelectTrigger,
  SelectValue,
} from "@/shared/ui/select";

import type { Renewal } from "../../../types/renewal.types";

type Props = {
  open: boolean;

  onOpenChange: (open: boolean) => void;

  renewal: Renewal | null;
};

function SendReminderDialog({ open, onOpenChange, renewal }: Props) {
  return (
    <Dialog open={open} onOpenChange={onOpenChange}>
      <DialogContent className="max-w-3xl">
        <DialogHeader>
          <DialogTitle>Send Renewal Reminder</DialogTitle>

          <DialogDescription>
            Notify the client about upcoming renewal.
          </DialogDescription>
        </DialogHeader>

        <div className="overflow-y-auto p-8">
          <div className="space-y-6">
            <div className="grid gap-5 md:grid-cols-2">
              <div className="space-y-2">
                <Label>Client</Label>

                <Input value={renewal?.client ?? ""} disabled />
              </div>

              <div className="space-y-2">
                <Label>Email</Label>

                <Input value={renewal?.email ?? ""} disabled />
              </div>
            </div>

            <div className="space-y-2">
              <Label>Reminder Type</Label>

              <Select>
                <SelectTrigger>
                  <SelectValue placeholder="Select reminder type" />
                </SelectTrigger>

                <SelectContent>
                  <SelectItem value="renewal">Renewal Reminder</SelectItem>

                  <SelectItem value="warning">Final Warning</SelectItem>

                  <SelectItem value="expired">Expired Notice</SelectItem>
                </SelectContent>
              </Select>
            </div>

            <div className="space-y-2">
              <Label>Message</Label>

              <Textarea rows={6} placeholder="Reminder message..." />
            </div>
          </div>
        </div>

        <DialogFooter>
          <Button variant="outline" onClick={() => onOpenChange(false)}>
            Cancel
          </Button>

          <Button>Send Reminder</Button>
        </DialogFooter>
      </DialogContent>
    </Dialog>
  );
}

export default SendReminderDialog;
