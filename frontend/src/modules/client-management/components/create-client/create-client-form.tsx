import { useState } from "react";

import CompanyInformationCard from "./company-information-card";

import PackageSelectionCard from "./package-selection-card";

import ModulesPreviewCard from "./modules-preview-card";

import BillingSummaryCard from "./billing-summary-card";

import CustomPackageConfigurator from "./custom-package-configurator";

import { packageData } from "../../constants/package-data";

import ClientBuilderSection from "../shared/client-builder-section";

import { FormProvider } from "react-hook-form";

import { useCreateClientForm } from "../../hooks/use-create-client-form";

function CreateClientForm() {
  const [selectedPackageId, setSelectedPackageId] = useState("growth");

  const [billingCycle, setBillingCycle] = useState<"monthly" | "yearly">(
    "monthly",
  );

  const [customConfig, setCustomConfig] = useState({
    employees: 500,

    admins: 20,

    storage: 100,

    monthlyPrice: 25000,

    yearlyPrice: 250000,

    discount: 10,

    setupFee: 5000,

    modules: ["Employee", "Attendance", "Payroll"],
  });

  const form = useCreateClientForm();

  const basePackage =
    packageData.find((pkg) => pkg.id === selectedPackageId) || packageData[1];

  const selectedPackage =
    selectedPackageId === "custom"
      ? {
          ...basePackage,

          employees: customConfig.employees,

          admins: customConfig.admins,

          storage: `${customConfig.storage} GB`,

          modules: customConfig.modules,

          monthlyPrice: customConfig.monthlyPrice,

          yearlyPrice: customConfig.yearlyPrice,

          discount: customConfig.discount,

          setupFee: customConfig.setupFee,
        }
      : basePackage;



  return (
    <FormProvider {...form}>
      <div className="grid gap-8 xl:grid-cols-[1fr_420px]">
        {/* LEFT SIDE */}
        <div className="space-y-8">
          {/* COMPANY INFORMATION */}
          <ClientBuilderSection
            title="Company Information"
            description="Basic tenant and workspace information."
          >
            <CompanyInformationCard />
          </ClientBuilderSection>

          {/* PACKAGE SELECTION */}
          <PackageSelectionCard
            packages={packageData}
            selectedPackageId={selectedPackageId}
            onSelectPackage={setSelectedPackageId}
          />

          {/* CUSTOM PACKAGE CONFIGURATION */}
          {selectedPackageId === "custom" && (
            <CustomPackageConfigurator
              config={customConfig}
              onChange={setCustomConfig}
            />
          )}
        </div>

        {/* RIGHT SIDE */}
        <div className="space-y-8">
          <div className="sticky top-8 space-y-8">
            {/* MODULE PREVIEW */}
            <ModulesPreviewCard modules={selectedPackage.modules} />

            {/* BILLING SUMMARY */}
            <BillingSummaryCard
              selectedPackage={selectedPackage}
              billingCycle={billingCycle}
              setBillingCycle={setBillingCycle}
            />
          </div>
        </div>
      </div>
    </FormProvider>
  );
}

export default CreateClientForm;
