import { Input } from "@/shared/ui/input";

import { Label } from "@/shared/ui/label";

import { RadioGroup, RadioGroupItem } from "@/shared/ui/radio-group";

function PackageBillingTab() {
  return (
    <div className="space-y-6">
      <div className="rounded-[28px] border border-border p-6">
        <h3 className="text-lg font-bold">Billing Configuration</h3>

        <div className="mt-6 grid gap-5 lg:grid-cols-2">
          <div>
            <Label>Package Price</Label>

            <Input defaultValue="120000" />
          </div>

          <div>
            <Label>Discount</Label>

            <Input defaultValue="0" />
          </div>

          <div>
            <Label>Tax</Label>

            <Input defaultValue="0" />
          </div>

          <div>
            <Label>Final Amount</Label>

            <Input defaultValue="120000" disabled />
          </div>

          <div>
            <Label>Start Date</Label>

            <Input type="date" />
          </div>

          <div>
            <Label>Expiry Date</Label>

            <Input type="date" />
          </div>
        </div>
      </div>

      <div className="rounded-[28px] border border-border p-6">
        <h3 className="text-lg font-bold">Billing Cycle</h3>

        <RadioGroup defaultValue="yearly" className="mt-6">
          <div className="flex items-center gap-3">
            <RadioGroupItem value="monthly" />

            <span>Monthly</span>
          </div>

          <div className="flex items-center gap-3">
            <RadioGroupItem value="quarterly" />

            <span>Quarterly</span>
          </div>

          <div className="flex items-center gap-3">
            <RadioGroupItem value="yearly" />

            <span>Yearly</span>
          </div>
        </RadioGroup>
      </div>
    </div>
  );
}

export default PackageBillingTab;
