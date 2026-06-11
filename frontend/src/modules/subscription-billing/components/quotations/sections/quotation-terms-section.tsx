import { CalendarDays, FileText, ShieldCheck } from "lucide-react";

import { Input } from "@/shared/ui/input";
import { Label } from "@/shared/ui/label";
import { Textarea } from "@/shared/ui/textarea";
import { useFormContext } from "react-hook-form";

function QuotationTermsSection() {
  const { register } = useFormContext();
  return (
    <div className="rounded-[28px] border border-border bg-card p-6 shadow-xl lg:p-8">
      <div>
        <h2 className="text-2xl font-black">Terms & Conditions</h2>

        <p className="mt-2 text-muted-foreground">
          Configure quotation validity, payment terms and commercial conditions.
        </p>
      </div>

      <div className="mt-8 grid gap-6 lg:grid-cols-2">
        {/* VALIDITY */}
        <div className="space-y-3">
          <Label>Quotation Validity</Label>

          <div className="relative">
            <CalendarDays
              size={18}
              className="absolute left-4 top-1/2 -translate-y-1/2 text-muted-foreground"
            />

            <Input
              type="number"
              placeholder="30"
              className="h-12 pl-11"
              {...register("validityDays", {
                valueAsNumber: true,
              })}
            />
          </div>

          <p className="text-xs text-muted-foreground">
            Number of days quotation remains valid.
          </p>
        </div>

        {/* PAYMENT TERMS */}
        <div className="space-y-3">
          <Label>Payment Terms</Label>

          <div className="relative">
            <ShieldCheck
              size={18}
              className="absolute left-4 top-1/2 -translate-y-1/2 text-muted-foreground"
            />

            <Input
              placeholder="100% Advance Payment"
              className="h-12 pl-11"
              {...register("paymentTerms")}
            />
          </div>
        </div>
      </div>

      {/* TERMS */}
      <div className="mt-8">
        <Label>Terms & Conditions</Label>

        <Textarea
          className="mt-3 min-h-[180px]"
          placeholder={`1. Subscription fees are billed according to the selected billing cycle.

2. Client onboarding will begin after payment confirmation.

3. Additional modules may incur additional charges.

4. Quotation validity is limited to the selected validity period.

5. Pricing is confidential and intended only for the recipient organization.`}
          {...register("termsAndConditions")}
        />
      </div>

      {/* INTERNAL NOTES */}
      <div className="mt-8">
        <Label>Internal Notes</Label>

        <div className="mt-3 relative">
          <FileText
            size={18}
            className="absolute left-4 top-4 text-muted-foreground"
          />

          <Textarea
            className="min-h-[140px] pl-11"
            placeholder="Internal sales notes, negotiation history, management approval notes..."
            {...register("internalNotes")}
          />
        </div>
      </div>

      {/* REVIEW CARD */}
      <div className="mt-8 rounded-[24px] border border-amber-500/20 bg-amber-500/5 p-6">
        <h3 className="font-black text-amber-600">Review Before Sending</h3>

        <p className="mt-3 text-sm leading-7 text-muted-foreground">
          Verify pricing, package allocation, commercial terms and validity
          before sending the quotation to the client.
        </p>
      </div>
    </div>
  );
}

export default QuotationTermsSection;
