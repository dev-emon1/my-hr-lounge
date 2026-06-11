import { useFormContext } from "react-hook-form";

import {
  Building2,
  Briefcase,
  Mail,
  Phone,
  UserRound,
  CalendarDays,
} from "lucide-react";

import { Input } from "@/shared/ui/input";
import { Label } from "@/shared/ui/label";

function QuotationClientSection() {
  const { register } = useFormContext();
  return (
    <div className="rounded-[28px] border border-border bg-card p-6 shadow-xl lg:p-8">
      <div>
        <h2 className="text-2xl font-black">Client Information</h2>

        <p className="mt-2 text-muted-foreground">
          Configure quotation recipient information and validity.
        </p>
      </div>

      <div className="mt-8 grid gap-6 lg:grid-cols-2">
        {/* Company Name */}
        <div className="space-y-3">
          <Label>Company Name</Label>

          <div className="relative">
            <Building2
              size={18}
              className="absolute left-4 top-1/2 -translate-y-1/2 text-muted-foreground"
            />

            <Input
              placeholder="Acme Corporation"
              className="h-12 pl-11"
              {...register("companyName")}
            />
          </div>
        </div>

        {/* Industry */}
        <div className="space-y-3">
          <Label>Industry</Label>

          <div className="relative">
            <Briefcase
              size={18}
              className="absolute left-4 top-1/2 -translate-y-1/2 text-muted-foreground"
            />

            <Input placeholder="Software Company" className="h-12 pl-11" />
          </div>
        </div>

        {/* Contact Person */}
        <div className="space-y-3">
          <Label>Contact Person</Label>

          <div className="relative">
            <UserRound
              size={18}
              className="absolute left-4 top-1/2 -translate-y-1/2 text-muted-foreground"
            />

            <Input
              placeholder="John Smith"
              className="h-12 pl-11"
              {...register("contactPerson")}
            />
          </div>
        </div>

        {/* Email */}
        <div className="space-y-3">
          <Label>Email Address</Label>

          <div className="relative">
            <Mail
              size={18}
              className="absolute left-4 top-1/2 -translate-y-1/2 text-muted-foreground"
            />

            <Input
              type="email"
              placeholder="john@company.com"
              className="h-12 pl-11"
              {...register("email")}
            />
          </div>
        </div>

        {/* Phone */}
        <div className="space-y-3">
          <Label>Phone Number</Label>

          <div className="relative">
            <Phone
              size={18}
              className="absolute left-4 top-1/2 -translate-y-1/2 text-muted-foreground"
            />

            <Input
              placeholder="+8801712345678"
              className="h-12 pl-11"
              {...register("phone")}
            />
          </div>
        </div>

        {/* Validity */}
        <div className="space-y-3">
          <Label>Quotation Valid Until</Label>

          <div className="relative">
            <CalendarDays
              size={18}
              className="absolute left-4 top-1/2 -translate-y-1/2 text-muted-foreground"
            />

            <Input
              type="date"
              className="h-12 pl-11"
              {...register("validityDate")}
            />
          </div>
        </div>
      </div>
    </div>
  );
}

export default QuotationClientSection;
