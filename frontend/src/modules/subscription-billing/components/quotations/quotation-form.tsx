import { useEffect } from "react";
import { FormProvider, useForm } from "react-hook-form";

import QuotationClientSection from "./sections/quotation-client-section";
import QuotationPackageSection from "./sections/quotation-package-section";
import QuotationPricingSection from "./sections/quotation-pricing-section";
import QuotationTermsSection from "./sections/quotation-terms-section";
import QuotationSummarySidebar from "./sections/quotation-summary-sidebar";

import { QuotationFormValues } from "../../types/quotation-form.types";
import { useQuotationStore } from "../../store/quotation-store";
import type { Quotation } from "../../types/quotation.types";
type Props = {
  mode: "create" | "edit";
  quotationId?: string;
  initialData?: Quotation;
};

function QuotationForm({ mode, quotationId, initialData }: Props) {
  const isCreate = mode === "create";

  const methods = useForm<QuotationFormValues>({
    defaultValues: {
      companyName: "",
      contactPerson: "",
      email: "",
      phone: "",
      industry: "",
      validityDate: "",
      packageName: "",
      billingCycle: "monthly",
      employeeCapacity: "",
      storageAllocation: "",
      basePrice: 0,
      discount: 0,
      tax: 0,
      additionalCharges: 0,
      commercialNotes: "",
      paymentTerms: "",
      termsAndConditions: "",
      internalNotes: "",
    },
  });

  const { watch } = methods;
  const { reset } = methods;
  const setQuotation = useQuotationStore((state) => state.setQuotation);

  useEffect(() => {
    const subscription = watch((values) => {
      setQuotation(values);
    });

    return () => subscription.unsubscribe();
  }, [watch, setQuotation]);

  useEffect(() => {
    if (!initialData) return;

    console.log(watch("validityDate"));

    reset({
      companyName: initialData.client,
      contactPerson: initialData.contactPerson,
      email: initialData.email,
      phone: initialData.phone,
      industry: initialData.industry ?? "",
      validityDate: initialData.expiryDate,

      packageName: initialData.packageName,
      billingCycle:
        initialData.billingCycle?.toLowerCase() === "yearly"
          ? "yearly"
          : "monthly",

      employeeCapacity: initialData.employeeCapacity ?? "",
      storageAllocation: initialData.storageAllocation ?? "",

      basePrice: initialData.basePrice ?? 0,
      discount: initialData.discount ?? 0,
      tax: initialData.tax ?? 0,
      additionalCharges: initialData.additionalCharges ?? 0,

      commercialNotes: initialData.commercialNotes ?? "",
      paymentTerms: initialData.paymentTerms ?? "",
      termsAndConditions: initialData.termsAndConditions ?? "",
      internalNotes: initialData.internalNotes ?? "",

      validityDays: initialData.validityDays ?? 30,
    });
  }, [initialData, reset]);
  return (
    <FormProvider {...methods}>
      <div className="space-y-8">
        {/* PAGE HEADER */}
        <div>
          <h1 className="text-4xl font-black tracking-tight">
            {isCreate ? "Create Quotation" : "Edit Quotation"}
          </h1>

          <p className="mt-2 text-muted-foreground">
            Configure client information, package allocation, pricing, validity
            and quotation terms.
          </p>
        </div>

        {/* CONTENT */}
        <div className="grid gap-8 xl:grid-cols-[minmax(0,1fr)_380px]">
          {/* LEFT */}
          <div className="space-y-8">
            <QuotationClientSection />

            <QuotationPackageSection />

            <QuotationPricingSection />

            <QuotationTermsSection />
          </div>

          {/* RIGHT SIDEBAR */}
          <div>
            <div className="sticky top-6">
              <QuotationSummarySidebar mode={mode} quotationId={quotationId} />
            </div>
          </div>
        </div>
      </div>
    </FormProvider>
  );
}

export default QuotationForm;
