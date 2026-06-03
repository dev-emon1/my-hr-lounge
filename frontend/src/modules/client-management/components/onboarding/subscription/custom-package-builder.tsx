import { Input } from "@/shared/ui/input";
import { Label } from "@/shared/ui/label";
import { Textarea } from "@/shared/ui/textarea";

function CustomPackageBuilder() {
  return (
    <div className="rounded-[28px] border border-border p-6 lg:p-8">
      <div>
        <h3 className="text-2xl font-black">Custom Package Builder</h3>

        <p className="mt-2 text-muted-foreground">
          Configure a completely custom package for enterprise clients.
        </p>
      </div>

      <div className="mt-8 grid gap-6 md:grid-cols-2">
        <div className="space-y-3">
          <Label>Employee Limit</Label>

          <Input type="number" placeholder="500" />
        </div>

        <div className="space-y-3">
          <Label>Admin Limit</Label>

          <Input type="number" placeholder="50" />
        </div>

        <div className="space-y-3">
          <Label>Storage (GB)</Label>

          <Input type="number" placeholder="500" />
        </div>

        <div className="space-y-3">
          <Label>Monthly Price</Label>

          <Input type="number" placeholder="999" />
        </div>

        <div className="space-y-3">
          <Label>Yearly Price</Label>

          <Input type="number" placeholder="9999" />
        </div>

        <div className="space-y-3">
          <Label>Setup Fee</Label>

          <Input type="number" placeholder="500" />
        </div>

        <div className="space-y-3">
          <Label>Discount (%)</Label>

          <Input type="number" placeholder="15" />
        </div>
      </div>

      <div className="mt-6">
        <Label>Notes</Label>

        <Textarea className="mt-3" placeholder="Special pricing notes..." />
      </div>
    </div>
  );
}

export default CustomPackageBuilder;
