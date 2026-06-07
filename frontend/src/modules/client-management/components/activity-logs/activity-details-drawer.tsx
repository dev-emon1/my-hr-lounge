import { Sheet, SheetContent } from "@/shared/ui/sheet";

type Props = {
  open: boolean;

  onOpenChange: (open: boolean) => void;
};

function ActivityDetailsDrawer({ open, onOpenChange }: Props) {
  return (
    <Sheet open={open} onOpenChange={onOpenChange}>
      <SheetContent className="w-full overflow-y-auto sm:max-w-[900px]">
        <div className="border-b border-border p-8">
          <h2 className="text-3xl font-black">Activity Details</h2>

          <p className="mt-2 text-muted-foreground">
            Complete activity audit information.
          </p>
        </div>

        <div className="space-y-6 p-8">
          <div className="rounded-[24px] border border-border p-6">
            <h3 className="font-bold">Activity Metadata</h3>

            <div className="mt-6 grid gap-5 md:grid-cols-2">
              <Info label="Activity ID" value="ACT-000124" />
              <Info label="Client" value="Acme Corporation" />
              <Info label="User" value="John Smith" />
              <Info label="Module" value="Employee Management" />
              <Info label="Status" value="Success" />
              <Info label="Timestamp" value="03 Jun 2026, 10:42 AM" />
            </div>
          </div>

          <div className="rounded-[24px] border border-border p-6">
            <h3 className="font-bold">Access Information</h3>

            <div className="mt-6 grid gap-5 md:grid-cols-2">
              <Info label="IP Address" value="103.145.10.55" />
              <Info label="Browser" value="Chrome 138" />
              <Info label="Device" value="Windows Desktop" />
              <Info label="Location" value="Dhaka, Bangladesh" />
            </div>
          </div>

          <div className="rounded-[24px] border border-border p-6">
            <h3 className="font-bold">Activity Payload</h3>

            <div className="mt-4 rounded-2xl bg-muted p-4 font-mono text-sm">
              {`{
  "employeeId": "EMP-001",
  "name": "John Doe",
  "department": "HR"
}`}
            </div>
          </div>

          <div className="rounded-[24px] border border-border p-6">
            <h3 className="font-bold">Change History</h3>

            <div className="mt-4 rounded-2xl bg-muted p-4 font-mono text-sm">
              {`Department: Marketing → HR
Status: Pending → Active`}
            </div>
          </div>
        </div>
      </SheetContent>
    </Sheet>
  );
}

function Info({ label, value }: { label: string; value: string }) {
  return (
    <div>
      <p className="text-sm text-muted-foreground">{label}</p>

      <p className="mt-1 font-semibold">{value}</p>
    </div>
  );
}

export default ActivityDetailsDrawer;
