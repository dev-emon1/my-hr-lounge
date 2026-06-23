import { useEffect } from "react";
import { FormProvider, useForm } from "react-hook-form";

import { zodResolver } from "@hookform/resolvers/zod";

import { trialPlanSchema } from "../../schemas/trial-plan.schema";

import type { TrialPlan } from "../../types/trial-plan.types";

import type { TrialPlanFormValues } from "../../types/trial-plan-builder.types";

import { mockTrialModules } from "../../constants/mock-trial-modules";

import TrialBasicInformationSection from "./sections/trial-basic-information-section";
import TrialDurationSection from "./sections/trial-duration-section";
import TrialLimitsSection from "./sections/trial-limits-section";
import TrialModuleAccessSection from "./sections/trial-module-access-section";

import TrialPlanSummarySidebar from "./trial-plan-summary-sidebar";

import { transformTrialPlanPayload } from "../../utils/trial-plan-transformer";

type Props = {
  mode: "create" | "edit";

  defaultValues?: Partial<TrialPlanFormValues>;

  initialData?: TrialPlan;

  onSubmit?: (payload: unknown) => void;
};

function TrialPlanForm({ mode, defaultValues, initialData, onSubmit }: Props) {
  const isCreate = mode === "create";

  const methods = useForm<TrialPlanFormValues>({
    resolver: zodResolver(trialPlanSchema),

    defaultValues: {
      trialName: "",

      trialCode: "",

      description: "",

      status: "Draft",

      durationDays: 14,

      employeeLimit: 50,

      modules: mockTrialModules,

      ...defaultValues,
    },
  });

  const { reset } = methods;

  useEffect(() => {
    if (!initialData) return;

    reset({
      trialName: initialData.trialName,

      trialCode: initialData.trialCode,

      description: initialData.description,

      durationDays: initialData.durationDays,

      employeeLimit: initialData.employeeLimit,

      status: initialData.status === "Active" ? "Published" : "Draft",

      modules: initialData.modules,
    });
  }, [initialData, reset]);

  const submitTrialPlan = (status: "Draft" | "Published") => {
    const values = methods.getValues();

    const payload = transformTrialPlanPayload({
      ...values,

      status,
    });

    console.log(payload);

    onSubmit?.(payload);
  };

  return (
    <FormProvider {...methods}>
      <div className="space-y-8">
        {/* HEADER */}

        <div>
          <h1 className="text-4xl font-black tracking-tight">
            {isCreate
              ? "Create Trial Plan"
              : `Edit ${initialData?.trialName ?? "Trial Plan"}`}
          </h1>

          <p className="mt-2 text-muted-foreground">
            Configure trial duration, employee capacity and module access.
          </p>
        </div>

        {/* CONTENT */}

        <div className="grid gap-8 xl:grid-cols-[minmax(0,1fr)_380px]">
          {/* LEFT */}

          <div className="space-y-8">
            <TrialBasicInformationSection />

            <TrialDurationSection />

            <TrialLimitsSection />

            <TrialModuleAccessSection />
          </div>

          {/* RIGHT */}

          <div>
            <div className="sticky top-6">
              <TrialPlanSummarySidebar
                mode={mode}
                onSaveDraft={methods.handleSubmit(() =>
                  submitTrialPlan("Draft"),
                )}
                onPublish={methods.handleSubmit(() =>
                  submitTrialPlan("Published"),
                )}
              />
            </div>
          </div>
        </div>
      </div>
    </FormProvider>
  );
}

export default TrialPlanForm;
