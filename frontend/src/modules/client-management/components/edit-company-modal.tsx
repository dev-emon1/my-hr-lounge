import { useEffect } from "react";

import { useForm } from "react-hook-form";

import { zodResolver } from "@hookform/resolvers/zod";

import { toast } from "sonner";

import { Button } from "@/shared/ui/button";

import Modal from "@/shared/components/modal/modal";

import ModalHeader from "@/shared/components/modal/modal-header";

import FormInput from "@/shared/components/forms/form-input";

import FormLabel from "@/shared/components/forms/form-label";

import FormError from "@/shared/components/forms/form-error";

import {
  companySchema,
  type CompanyFormValues,
} from "../schema/company-schema";

import type { Company } from "../types/company.types";

import { useCompaniesStore } from "../store/companies-store";

type Props = {
  open: boolean;

  onOpenChange: (open: boolean) => void;

  company: Company | null;
};

function EditCompanyModal({ open, onOpenChange, company }: Props) {
  const updateCompany = useCompaniesStore((state) => state.updateCompany);

  const {
    register,

    handleSubmit,

    reset,

    formState: { errors },
  } = useForm<CompanyFormValues>({
    resolver: zodResolver(companySchema),
  });

  useEffect(() => {
    if (company) {
      reset({
        companyName: company.companyName,

        industry: company.industry,

        employees: String(company.employees),

        subscription: company.subscription,
      });
    }
  }, [company, reset]);

  const onSubmit = (data: CompanyFormValues) => {
    if (!company) {
      return;
    }

    updateCompany({
      ...company,

      companyName: data.companyName,

      industry: data.industry,

      employees: Number(data.employees),

      subscription: data.subscription,
    });

    toast.success("Company updated successfully");

    onOpenChange(false);
  };

  return (
    <Modal open={open} onOpenChange={onOpenChange}>
      <ModalHeader
        title="Edit Company"
        description="Update tenant company information"
      />

      <form onSubmit={handleSubmit(onSubmit)} className="space-y-5">
        <div>
          <FormLabel label="Company Name" />

          <FormInput {...register("companyName")} />

          <FormError message={errors.companyName?.message} />
        </div>

        <div>
          <FormLabel label="Industry" />

          <FormInput {...register("industry")} />

          <FormError message={errors.industry?.message} />
        </div>

        <div>
          <FormLabel label="Employees" />

          <FormInput {...register("employees")} />

          <FormError message={errors.employees?.message} />
        </div>

        <div>
          <FormLabel label="Subscription" />

          <FormInput {...register("subscription")} />

          <FormError message={errors.subscription?.message} />
        </div>

        <Button type="submit" className="w-full">
          Update Company
        </Button>
      </form>
    </Modal>
  );
}

export default EditCompanyModal;
