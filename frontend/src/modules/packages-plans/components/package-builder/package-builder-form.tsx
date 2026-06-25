import { useEffect } from "react";
import { FormProvider, useForm } from "react-hook-form";
import { useNavigate } from "react-router-dom";

import { zodResolver } from "@hookform/resolvers/zod";
import { toast } from "sonner";

import { packageBuilderSchema } from "../../schemas/package-builder.schema";

import { mockPackageModules } from "../../constants/mock-package-builder";

import PackageBasicInformationSection from "./sections/package-basic-information-section";
import PackagePricingSection from "./sections/package-pricing-section";
import PackageLimitsSection from "./sections/package-limits-section";
import PackageModuleAccessSection from "./sections/package-module-access-section";
import PackageIntegrationsSection from "./sections/package-integrations-section";
import PackageTrialSection from "./sections/package-trial-section";
import PackageBuilderSummarySidebar from "./package-builder-summary-sidebar";

import { transformPackagePayload } from "../../utils/package-builder-transformer";

import type {
  PackageBuilder,
  PackageBuilderFormValues,
} from "../../types/package-builder.types";

import type { PackagePayload } from "../../types/package-builder-api.types";

import {
  useCreatePackageMutation,
  useUpdatePackageMutation,
} from "../../api/package-builder-api";

type Props = {
  mode: "create" | "edit";
  defaultValues?: Partial<PackageBuilderFormValues>;
  initialData?: PackageBuilder;
  onSubmit?: (data: PackagePayload) => void;
};

function PackageBuilderForm({
  mode,
  defaultValues,
  initialData,
  onSubmit,
}: Props) {
  const navigate = useNavigate();

  const [createPackage, { isLoading: isCreating }] = useCreatePackageMutation();

  const [updatePackage, { isLoading: isUpdating }] = useUpdatePackageMutation();

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

      limits: {
        employees: null,
        admins: null,
        departmentLimit: null,
        branches: null,
        storageGb: null,
        deviceLimit: null,
      },

      trialEnabled: false,
      trialDays: 14,

      modules: mockPackageModules,

      integrations: {
        zkteco: false,
        apiAccess: false,
        whatsapp: false,
      },

      ...defaultValues,
    },
  });

  const { reset } = methods;

  useEffect(() => {
    if (!initialData) return;

    reset({
      packageName: initialData.packageName,

      packageCode: initialData.packageCode,

      description: initialData.description ?? "",

      monthlyPrice: initialData.monthlyPrice,
      yearlyPrice: initialData.yearlyPrice,

      limits: initialData.limits ?? {
        employees: null,
        admins: null,
        departmentLimit: null,
        branches: null,
        storageGb: null,
        deviceLimit: null,
      },

      trialEnabled: initialData.trialEnabled ?? false,
      trialDays: initialData.trialDays ?? 14,

      status: initialData.status === "Archived" ? "Draft" : initialData.status,
      modules: initialData.modules,

      integrations: initialData.integrations ?? {
        zkteco: false,
        apiAccess: false,
        whatsapp: false,
      },
    });
  }, [initialData, reset]);

  const submitPackage = async (status: "Draft" | "Published") => {
    try {
      const values = methods.getValues();

      const payload = transformPackagePayload({
        ...values,
        status,
      });

      console.log("PACKAGE PAYLOAD", payload);

      if (onSubmit) {
        onSubmit(payload);
        return;
      }

      let response;

      if (mode === "create") {
        response = await createPackage(payload).unwrap();
      } else {
        response = await updatePackage({
          packageCode: initialData?.packageCode ?? "",

          payload,
        }).unwrap();
      }

      toast.success(
        response?.message ??
          `Package ${mode === "create" ? "created" : "updated"} successfully`,
      );

      navigate("/packages-plans/all-packages");
    } catch (error: any) {
      toast.error(error?.data?.message ?? "Something went wrong");

      console.error(error);
    }
  };

  const handleSaveDraft = async () => {
    await submitPackage("Draft");
  };

  const handlePublish = async () => {
    await submitPackage("Published");
  };

  return (
    <FormProvider {...methods}>
      <div className="space-y-8">
        {/* PAGE HEADER */}

        <div>
          <h1 className="text-4xl font-black tracking-tight">
            {isCreate
              ? "Create Package"
              : `Edit ${initialData?.packageName ?? "Package"}`}
          </h1>

          <p className="mt-2 text-muted-foreground">
            Configure package information, pricing, limits, modules,
            integrations and trial access.
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

            <PackageIntegrationsSection />

            <PackageTrialSection />
          </div>

          {/* RIGHT */}

          <div>
            <div className="sticky top-6">
              <PackageBuilderSummarySidebar
                mode={mode}
                isLoading={isCreating || isUpdating}
                onSaveDraft={methods.handleSubmit(handleSaveDraft)}
                onPublish={methods.handleSubmit(handlePublish)}
              />
            </div>
          </div>
        </div>
      </div>
    </FormProvider>
  );
}

export default PackageBuilderForm;
