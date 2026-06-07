import { Input } from "@/shared/ui/input";

import { Label } from "@/shared/ui/label";

import { Checkbox } from "@/shared/ui/checkbox";

function PackageOverridesTab() {
  return (
    <div className="space-y-6">
      <div className="rounded-[28px] border border-border p-6">
        <h3 className="text-lg font-bold">Resource Overrides</h3>

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
            <Label>Custom Price</Label>

            <Input defaultValue="0" />
          </div>

          <div>
            <Label>Additional Users</Label>

            <Input defaultValue="0" />
          </div>
        </div>
      </div>

      <div className="rounded-[28px] border border-border p-6">
        <h3 className="text-lg font-bold">Module Overrides</h3>

        <div className="mt-6 space-y-4">
          <div className="flex items-center gap-3">
            <Checkbox />

            <span>Recruitment Module</span>
          </div>

          <div className="flex items-center gap-3">
            <Checkbox />

            <span>Payroll Module</span>
          </div>

          <div className="flex items-center gap-3">
            <Checkbox />

            <span>Performance Module</span>
          </div>

          <div className="flex items-center gap-3">
            <Checkbox />

            <span>Learning Module</span>
          </div>
        </div>
      </div>
    </div>
  );
}

export default PackageOverridesTab;
