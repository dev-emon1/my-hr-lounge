import { Building2 } from "lucide-react";

function CreateClientHeader() {
  return (
    <div className="flex flex-col gap-4 lg:flex-row lg:items-center lg:justify-between">
      <div>
        <div className="mb-4 flex h-14 w-14 items-center justify-center rounded-3xl bg-primary/10 text-primary">
          <Building2 size={28} />
        </div>

        <h1 className="text-4xl font-black tracking-tight">Create Client</h1>

        <p className="mt-3 max-w-3xl text-base leading-7 text-muted-foreground">
          Onboard a new tenant company into the HR Lounge ecosystem. Configure
          company information, assign subscription packages, define module
          access, and initialize workspace settings.
        </p>
      </div>
    </div>
  );
}

export default CreateClientHeader;
