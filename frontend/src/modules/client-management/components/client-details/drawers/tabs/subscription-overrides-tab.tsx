import { Input } from "@/shared/ui/input";

import { Label } from "@/shared/ui/label";

function SubscriptionOverridesTab() {
  return (
    <div className="rounded-[24px] border border-border p-6">
      <h3 className="font-bold">Package Overrides</h3>

      <div className="mt-6 grid gap-5 lg:grid-cols-2">
        <div>
          <Label>Employee Limit</Label>

          <Input defaultValue="5000" />
        </div>

        <div>
          <Label>Storage Limit (GB)</Label>

          <Input defaultValue="2048" />
        </div>

        <div>
          <Label>Additional Cost</Label>

          <Input defaultValue="0" />
        </div>

        <div>
          <Label>Custom Module Count</Label>

          <Input defaultValue="0" />
        </div>
      </div>
    </div>
  );
}

export default SubscriptionOverridesTab;
