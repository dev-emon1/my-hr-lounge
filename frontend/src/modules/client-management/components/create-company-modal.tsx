import { useForm } from "react-hook-form";

import { zodResolver } from "@hookform/resolvers/zod";

import { Button } from "@/shared/ui/button";

import Modal from "@/shared/components/modal/modal";

import ModalHeader from "@/shared/components/modal/modal-header";

import FormInput from "@/shared/components/forms/form-input";

import FormLabel from "@/shared/components/forms/form-label";

import FormError from "@/shared/components/forms/form-error";

import { toast } from "sonner";

import { useCompaniesStore } from "../store/companies-store";

import {
  companySchema,
  type CompanyFormValues,
} from "../schema/company-schema";

type Props = {
  open: boolean;

  onOpenChange: (open: boolean) => void;
};

function CreateCompanyModal({ open, onOpenChange }: Props) {
  const {
    register,

    handleSubmit,

    formState: { errors },

    reset,
  } = useForm<CompanyFormValues>({
    resolver: zodResolver(companySchema),
  });

  const createCompany = useCompaniesStore((state) => state.createCompany);

  const onSubmit = (data: CompanyFormValues) => {
    createCompany(data);

    toast.success("Company created successfully");

    reset();

    onOpenChange(false);
  };

  return (
    <Modal open={open} onOpenChange={onOpenChange}>
      <ModalHeader
        title="Create Company"
        description="Add a new tenant company to the platform"
      />

      <form onSubmit={handleSubmit(onSubmit)} className="space-y-5">
        <div>
          <FormLabel label="Company Name" />

          <FormInput
            placeholder="Enter company name"
            {...register("companyName")}
          />

          <FormError message={errors.companyName?.message} />
        </div>

        <div>
          <FormLabel label="Industry" />

          <FormInput
            placeholder="Software / Finance / Logistics"
            {...register("industry")}
          />

          <FormError message={errors.industry?.message} />
        </div>

        <div>
          <FormLabel label="Employees" />

          <FormInput placeholder="120" {...register("employees")} />

          <FormError message={errors.employees?.message} />
        </div>

        <div>
          <FormLabel label="Subscription" />

          <FormInput placeholder="Enterprise" {...register("subscription")} />

          <FormError message={errors.subscription?.message} />
        </div>

        <Button type="submit" className="w-full">
          Create Company
        </Button>
      </form>
    </Modal>
  );
}

export default CreateCompanyModal;
