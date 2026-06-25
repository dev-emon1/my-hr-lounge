import { useFormContext } from "react-hook-form";

import { Checkbox } from "@/shared/ui/checkbox";

import type { PackageBuilderFormValues } from "../../../types/package-builder.types";

function PackageIntegrationsSection() {
  const { watch, setValue } = useFormContext<PackageBuilderFormValues>();

  const integrations = watch("integrations");

  return (
    <div className="rounded-[32px] border border-border bg-card p-8">
      <div>
        <h2 className="text-2xl font-black">Integrations</h2>

        <p className="mt-2 text-muted-foreground">
          Configure third-party integrations available in this package.
        </p>
      </div>

      <div className="mt-8 space-y-4">
        <IntegrationCard
          title="ZKTeco Integration"
          description="Enable biometric device integration."
          checked={integrations.zkteco}
          onChange={(checked) =>
            setValue("integrations.zkteco", Boolean(checked))
          }
        />

        <IntegrationCard
          title="API Access"
          description="Allow API access for external systems."
          checked={integrations.apiAccess}
          onChange={(checked) =>
            setValue("integrations.apiAccess", Boolean(checked))
          }
        />

        <IntegrationCard
          title="WhatsApp Integration"
          description="Enable WhatsApp notifications and messaging."
          checked={integrations.whatsapp}
          onChange={(checked) =>
            setValue("integrations.whatsapp", Boolean(checked))
          }
        />
      </div>
    </div>
  );
}

type IntegrationCardProps = {
  title: string;

  description: string;

  checked: boolean;

  onChange: (checked: boolean) => void;
};

function IntegrationCard({
  title,
  description,
  checked,
  onChange,
}: IntegrationCardProps) {
  return (
    <div
      className="
        flex items-center justify-between
        rounded-3xl border border-border
        bg-background p-5
      "
    >
      <div>
        <h4 className="font-bold">{title}</h4>

        <p className="mt-1 text-sm text-muted-foreground">{description}</p>
      </div>

      <Checkbox
        checked={checked}
        onCheckedChange={(value) => onChange(Boolean(value))}
      />
    </div>
  );
}

export default PackageIntegrationsSection;
