import { useFormContext } from "react-hook-form";
import { FileText, Eye, Send, Save, BadgeDollarSign } from "lucide-react";

import { Button } from "@/shared/ui/button";
import { useNavigate } from "react-router-dom";

import type { QuotationFormValues } from "../../../types/quotation-form.types";

type Props = {
  mode: "create" | "edit";
  quotationId?: string;
};

function QuotationSummarySidebar({ mode, quotationId }: Props) {
  const navigate = useNavigate();
  const { watch } = useFormContext<QuotationFormValues>();

  const company = watch("companyName");
  const packageName = watch("packageName");
  const billing = watch("billingCycle");
  const validity = watch("validityDays");
  const basePrice = watch("basePrice") || 0;
  const discount = watch("discount") || 0;
  const tax = watch("tax") || 0;
  const additional = watch("additionalCharges") || 0;

  const subtotal = Math.max(0, basePrice - discount + additional);
  const taxAmount = (subtotal * tax) / 100;
  const finalAmount = subtotal + taxAmount;
  return (
    <div className="space-y-6">
      {/* SUMMARY */}
      <div className="rounded-[28px] border border-border bg-card p-6 shadow-xl">
        <h3 className="text-xl font-black">Quotation Summary</h3>

        <div className="mt-6 space-y-4">
          <Item label="Client" value={company || "Not Selected"} />

          <Item label="Package" value={packageName || "Not Selected"} />

          <Item
            label="Billing"
            value={
              billing
                ? billing.charAt(0).toUpperCase() + billing.slice(1)
                : "Not Selected"
            }
          />

          <Item
            label="Validity"
            value={validity ? `${validity} Days` : "Not Defined"}
          />

          <Item
            label="Status"
            value={mode === "create" ? "Draft" : "Draft (Editing)"}
          />
        </div>

        <div className="mt-6 rounded-2xl border border-primary/20 bg-primary/5 p-5">
          <p className="text-xs uppercase tracking-wider text-muted-foreground">
            Estimated Value
          </p>

          <div className="mt-2">
            <span className="text-3xl font-black text-primary">
              ৳ {finalAmount.toLocaleString()}
            </span>
          </div>

          <div className="mt-5 space-y-2 border-t border-border pt-4 text-sm">
            <div className="flex justify-between">
              <span>Base Price</span>

              <span>৳ {basePrice.toLocaleString()}</span>
            </div>

            <div className="flex justify-between">
              <span>Discount</span>

              <span className="text-red-500">
                - ৳ {discount.toLocaleString()}
              </span>
            </div>

            <div className="flex justify-between">
              <span>Additional</span>

              <span>৳ {additional.toLocaleString()}</span>
            </div>

            <div className="flex justify-between">
              <span>VAT / Tax</span>

              <span>৳ {taxAmount.toLocaleString()}</span>
            </div>

            <div className="flex justify-between border-t border-border pt-3 font-bold">
              <span>Final Amount</span>

              <span>৳ {finalAmount.toLocaleString()}</span>
            </div>
          </div>
        </div>
      </div>

      {/* ACTIONS */}
      <div className="rounded-[28px] border border-border bg-card p-6 shadow-xl">
        <h3 className="text-xl font-black">Actions</h3>

        <div className="mt-6 space-y-3">
          <Button variant="outline" className="w-full justify-start">
            <Save size={16} />
            Save Draft
          </Button>

          <Button
            variant="outline"
            className="w-full justify-start"
            disabled={!quotationId}
            onClick={() =>
              navigate(`/billing/quotations/${quotationId}/preview`)
            }
          >
            <Eye size={16} />
            Preview Quotation
          </Button>

          <Button variant="outline" className="w-full justify-start">
            <FileText size={16} />
            Generate PDF
          </Button>

          <Button className="w-full justify-start">
            <Send size={16} />
            Save & Send
          </Button>
        </div>
      </div>

      {/* WORKFLOW */}
      <div className="rounded-[28px] border border-emerald-500/20 bg-emerald-500/5 p-6">
        <h3 className="font-black text-emerald-600">Workflow</h3>

        <div className="mt-4 space-y-3 text-sm">
          <div>Draft → Sent</div>

          <div>Sent → Approved</div>

          <div>Approved → Onboarding</div>

          <div>Onboarding → Converted</div>
        </div>
      </div>
    </div>
  );
}

function Item({ label, value }: { label: string; value: string }) {
  return (
    <div>
      <p className="text-xs uppercase tracking-wider text-muted-foreground">
        {label}
      </p>

      <p className="mt-1 font-semibold">{value}</p>
    </div>
  );
}

export default QuotationSummarySidebar;
