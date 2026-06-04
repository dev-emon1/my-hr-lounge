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

import { Textarea } from "@/shared/ui/textarea";

import {
  Select,
  SelectContent,
  SelectItem,
  SelectTrigger,
  SelectValue,
} from "@/shared/ui/select";

import FormField from "@/shared/ui/form-field";

import type { Subscription } from "../../../types/subscription.types";

type Props = {
  open: boolean;

  onOpenChange: (open: boolean) => void;

  subscription: Subscription | null;
};

function UpgradePackageModal({ open, onOpenChange, subscription }: Props) {
  return (
    <Dialog open={open} onOpenChange={onOpenChange}>
      <DialogContent className="max-w-5xl">
        <DialogHeader>
          <DialogTitle>Upgrade Package</DialogTitle>

          <DialogDescription>
            Upgrade subscription package and calculate billing impact.
          </DialogDescription>
        </DialogHeader>

        <div className="overflow-y-auto p-8">
          <div className="space-y-8">
            <div className="rounded-2xl border border-border p-5">
              <h3 className="font-bold">Current Package</h3>

              <div className="mt-4 grid gap-4 md:grid-cols-3">
                <FormField label="Package">
                  <Input value={subscription?.packageName ?? ""} disabled />
                </FormField>

                <FormField label="Employees">
                  <Input value="200" disabled />
                </FormField>

                <FormField label="Price">
                  <Input value="৳ 25,000" disabled />
                </FormField>
              </div>
            </div>

            <FormField label="Upgrade To">
              <Select>
                <SelectTrigger>
                  <SelectValue placeholder="Select package" />
                </SelectTrigger>

                <SelectContent>
                  <SelectItem value="growth">Growth</SelectItem>

                  <SelectItem value="enterprise">Enterprise</SelectItem>

                  <SelectItem value="enterprise-plus">
                    Enterprise Plus
                  </SelectItem>
                </SelectContent>
              </Select>
            </FormField>

            <div className="rounded-2xl border border-border p-5">
              <h3 className="font-bold">Package Comparison</h3>

              <div className="mt-4 grid gap-4 md:grid-cols-2">
                <div>
                  <p className="text-sm text-muted-foreground">
                    Employee Limit
                  </p>

                  <p className="font-semibold">200 → 500</p>
                </div>

                <div>
                  <p className="text-sm text-muted-foreground">Storage</p>

                  <p className="font-semibold">20 GB → 100 GB</p>
                </div>

                <div>
                  <p className="text-sm text-muted-foreground">Modules</p>

                  <p className="font-semibold">8 → 20</p>
                </div>

                <div>
                  <p className="text-sm text-muted-foreground">Branches</p>

                  <p className="font-semibold">5 → Unlimited</p>
                </div>
              </div>
            </div>

            <div className="rounded-2xl border border-border p-5">
              <h3 className="font-bold">Billing Impact</h3>

              <div className="mt-4 grid gap-4 md:grid-cols-3">
                <div>
                  <p className="text-sm text-muted-foreground">Current Price</p>

                  <p className="font-semibold">৳ 25,000</p>
                </div>

                <div>
                  <p className="text-sm text-muted-foreground">New Price</p>

                  <p className="font-semibold">৳ 50,000</p>
                </div>

                <div>
                  <p className="text-sm text-muted-foreground">Difference</p>

                  <p className="font-semibold text-green-600">+৳ 25,000</p>
                </div>
              </div>
            </div>

            <FormField label="Effective Date">
              <Input type="date" />
            </FormField>

            <FormField label="Upgrade Notes">
              <Textarea rows={5} placeholder="Optional notes..." />
            </FormField>
          </div>
        </div>

        <DialogFooter>
          <Button variant="outline" onClick={() => onOpenChange(false)}>
            Cancel
          </Button>

          <Button>Upgrade Package</Button>
        </DialogFooter>
      </DialogContent>
    </Dialog>
  );
}

export default UpgradePackageModal;
