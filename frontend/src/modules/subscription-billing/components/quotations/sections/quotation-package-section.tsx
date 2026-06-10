import { useFormContext } from "react-hook-form";

import { CreditCard } from "lucide-react";

import {
  Select,
  SelectContent,
  SelectItem,
  SelectTrigger,
  SelectValue,
} from "@/shared/ui/select";

import type { QuotationFormValues } from "../../../types/quotation-form.types";

function QuotationPackageSection() {
  const { watch, setValue } = useFormContext<QuotationFormValues>();

  const packageName = watch("packageName");
  const billingCycle = watch("billingCycle");
  const employeeCapacity = watch("employeeCapacity");
  const storageAllocation = watch("storageAllocation");

  const packageDisplay = packageName || "Not Selected";

  const billingDisplay = billingCycle || "Not Selected";

  const employeeDisplay = employeeCapacity || "Not Defined";

  const storageDisplay = storageAllocation || "Not Defined";
  return (
    <div className="rounded-[28px] border border-border bg-card p-6 shadow-xl lg:p-8">
      <div>
        <h2 className="text-2xl font-black">Package Configuration</h2>

        <p className="mt-2 text-muted-foreground">
          Configure package, billing cycle and commercial scope.
        </p>
      </div>

      <div className="mt-8 grid gap-6 lg:grid-cols-2">
        {/* PACKAGE */}
        <div className="space-y-3">
          <label className="text-sm font-medium">Package</label>

          <Select
            value={packageName}
            onValueChange={(value) => setValue("packageName", value)}
          >
            <SelectTrigger className="h-12">
              <SelectValue placeholder="Select Package" />
            </SelectTrigger>

            <SelectContent>
              <SelectItem value="starter">Starter</SelectItem>

              <SelectItem value="growth">Growth</SelectItem>

              <SelectItem value="enterprise">Enterprise</SelectItem>

              <SelectItem value="custom">Custom</SelectItem>
            </SelectContent>
          </Select>
        </div>

        {/* BILLING */}
        <div className="space-y-3">
          <label className="text-sm font-medium">Billing Cycle</label>

          <Select
            value={billingCycle}
            onValueChange={(value) =>
              setValue("billingCycle", value as "monthly" | "yearly")
            }
          >
            <SelectTrigger className="h-12">
              <SelectValue placeholder="Billing Cycle" />
            </SelectTrigger>

            <SelectContent>
              <SelectItem value="monthly">Monthly</SelectItem>

              <SelectItem value="yearly">Yearly</SelectItem>
            </SelectContent>
          </Select>
        </div>

        {/* EMPLOYEES */}
        <div className="space-y-3">
          <label className="text-sm font-medium">Employee Capacity</label>

          <Select
            value={employeeCapacity}
            onValueChange={(value) => setValue("employeeCapacity", value)}
          >
            <SelectTrigger className="h-12">
              <SelectValue placeholder="Employee Capacity" />
            </SelectTrigger>

            <SelectContent>
              <SelectItem value="100">100 Employees</SelectItem>

              <SelectItem value="500">500 Employees</SelectItem>

              <SelectItem value="1000">1000 Employees</SelectItem>

              <SelectItem value="unlimited">Unlimited</SelectItem>
            </SelectContent>
          </Select>
        </div>

        {/* STORAGE */}
        <div className="space-y-3">
          <label className="text-sm font-medium">Storage Allocation</label>

          <Select
            value={storageAllocation}
            onValueChange={(value) => setValue("storageAllocation", value)}
          >
            <SelectTrigger className="h-12">
              <SelectValue placeholder="Storage" />
            </SelectTrigger>

            <SelectContent>
              <SelectItem value="50">50 GB</SelectItem>

              <SelectItem value="100">100 GB</SelectItem>

              <SelectItem value="500">500 GB</SelectItem>

              <SelectItem value="1000">1 TB</SelectItem>
            </SelectContent>
          </Select>
        </div>
      </div>

      {/* PACKAGE PREVIEW */}
      <div className="mt-8 rounded-[24px] border border-primary/20 bg-primary/5 p-6">
        <div className="flex items-center gap-3">
          <CreditCard size={20} className="text-primary" />

          <h3 className="font-black text-primary">Package Preview</h3>
        </div>

        <p className="mt-3 text-sm leading-7 text-muted-foreground">
          Selected package modules, limits, storage allocation and commercial
          pricing will appear here.
        </p>
      </div>
    </div>
  );
}

export default QuotationPackageSection;
