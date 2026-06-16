import { FormProvider, useForm } from "react-hook-form";

import { zodResolver } from "@hookform/resolvers/zod";

import { packageBuilderSchema } from "../../schemas/package-builder.schema";

import type { PackageBuilderFormValues } from "../../types/package-builder.types";

import {
  mockPackageFeatures,
  mockPackageModules,
} from "../../constants/mock-package-builder";

import PackageBasicInformationSection from "./sections/package-basic-information-section";
import PackagePricingSection from "./sections/package-pricing-section";
import PackageLimitsSection from "./sections/package-limits-section";
import PackageModuleAccessSection from "./sections/package-module-access-section";
import PackageTrialSection from "./sections/package-trial-section";
import PackageBuilderSummarySidebar from "./package-builder-summary-sidebar";

type Props = {
  mode: "create" | "edit";

  packageCode?: string;

  defaultValues?: Partial<PackageBuilderFormValues>;

  onSubmit?: (data: PackageBuilderFormValues) => void;
};

function PackageBuilderForm({
  mode,
  packageCode,
  defaultValues,
  onSubmit,
}: Props) {
  const isCreate = mode === "create";

  const methods = useForm<PackageBuilderFormValues>({
    resolver: zodResolver(packageBuilderSchema),

    defaultValues: {
      packageName: "",

      packageCode: "",

      description: "",

      status: "Draft",

      monthlyPrice: 0,

      yearlyPrice: 0,

      employeeLimit: null,

      branchLimit: null,

      storageLimit: "",

      trialEnabled: false,

      trialDays: 0,

      modules: mockPackageModules,

      features: mockPackageFeatures,

      ...defaultValues,
    },
  });

  const handleSubmit = (data: PackageBuilderFormValues) => {
    onSubmit?.(data);

    console.log(data);
  };

  return (
    <FormProvider {...methods}>
      <div className="space-y-8">
        {/* PAGE HEADER */}

        <div>
          <h1 className="text-4xl font-black tracking-tight">
            {isCreate ? "Create Package" : "Edit Package"}
          </h1>

          <p className="mt-2 text-muted-foreground">
            Configure package information, pricing, limits, modules and feature
            access.
          </p>
        </div>

        {/* CONTENT */}

        <div className="grid gap-8 xl:grid-cols-[minmax(0,1fr)_380px]">
          {/* LEFT */}

          <div className="space-y-8">
            <PackageBasicInformationSection />

            <PackagePricingSection />

            <PackageLimitsSection />

            <PackageModuleAccessSection />

            <PackageTrialSection />
          </div>

          {/* RIGHT SIDEBAR */}

          <div>
            <div className="sticky top-6">
              <PackageBuilderSummarySidebar
                mode={mode}
                packageCode={packageCode}
              />
            </div>
          </div>
        </div>
      </div>
    </FormProvider>
  );
}

export default PackageBuilderForm;
