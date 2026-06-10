import { useFormContext } from "react-hook-form";

import { Calculator, Percent, Receipt, TrendingUp } from "lucide-react";

import { Input } from "@/shared/ui/input";
import { Label } from "@/shared/ui/label";
import { Textarea } from "@/shared/ui/textarea";

import type { QuotationFormValues } from "../../../types/quotation-form.types";

function QuotationPricingSection() {
  const { register, watch } = useFormContext<QuotationFormValues>();

  const basePrice = watch("basePrice") || 0;

  const discount = watch("discount") || 0;

  const tax = watch("tax") || 0;

  const additional = watch("additionalCharges") || 0;

  const subtotal = Math.max(0, basePrice - discount + additional);

  const taxAmount = (subtotal * tax) / 100;

  const finalAmount = subtotal + taxAmount;
  return (
    <div className="rounded-[28px] border border-border bg-card p-6 shadow-xl lg:p-8">
      <div>
        <h2 className="text-2xl font-black">Commercial Pricing</h2>

        <p className="mt-2 text-muted-foreground">
          Configure pricing, discounts, taxes and commercial adjustments.
        </p>
      </div>

      <div className="mt-8 grid gap-6 lg:grid-cols-2">
        {/* Base Price */}
        <div className="space-y-3">
          <Label>Base Package Price</Label>

          <div className="relative">
            <Calculator
              size={18}
              className="absolute left-4 top-1/2 -translate-y-1/2 text-muted-foreground"
            />

            <Input
              type="number"
              placeholder="80000"
              className="h-12 pl-11"
              {...register("basePrice", {
                valueAsNumber: true,
              })}
            />
          </div>
        </div>

        {/* Discount */}
        <div className="space-y-3">
          <Label>Discount Amount</Label>

          <div className="relative">
            <Percent
              size={18}
              className="absolute left-4 top-1/2 -translate-y-1/2 text-muted-foreground"
            />

            <Input
              type="number"
              placeholder="5000"
              className="h-12 pl-11"
              {...register("discount", {
                valueAsNumber: true,
              })}
            />
          </div>
        </div>

        {/* Tax */}
        <div className="space-y-3">
          <Label>Tax / VAT</Label>

          <div className="relative">
            <Receipt
              size={18}
              className="absolute left-4 top-1/2 -translate-y-1/2 text-muted-foreground"
            />

            <Input
              type="number"
              placeholder="15"
              className="h-12 pl-11"
              {...register("tax", {
                valueAsNumber: true,
              })}
            />
          </div>
        </div>

        {/* Additional Charges */}
        <div className="space-y-3">
          <Label>Additional Charges</Label>

          <div className="relative">
            <TrendingUp
              size={18}
              className="absolute left-4 top-1/2 -translate-y-1/2 text-muted-foreground"
            />

            <Input
              type="number"
              placeholder="0"
              className="h-12 pl-11"
              {...register("additionalCharges", {
                valueAsNumber: true,
              })}
            />
          </div>
        </div>
      </div>

      {/* Notes */}
      <div className="mt-8">
        <Label>Commercial Notes</Label>

        <Textarea
          className="mt-3 min-h-[140px]"
          placeholder="Special pricing agreements, implementation fees, negotiation notes, custom terms..."
          {...register("commercialNotes")}
        />
      </div>

      {/* Pricing Preview */}
      <div className="mt-8 rounded-[24px] border border-emerald-500/20 bg-emerald-500/5 p-6">
        <h3 className="font-black text-emerald-600">Pricing Preview</h3>

        <div className="mt-5 space-y-3">
          <div className="flex justify-between">
            <span className="text-muted-foreground">Base Price</span>

            <span className="font-semibold">
              ৳ {basePrice.toLocaleString()}
            </span>
          </div>

          <div className="flex justify-between">
            <span className="text-muted-foreground">Discount</span>

            <span className="font-semibold text-red-500">
              - ৳ {discount.toLocaleString()}
            </span>
          </div>

          <div className="flex justify-between">
            <span className="text-muted-foreground">Tax</span>

            <span className="font-semibold">
              ৳ {taxAmount.toLocaleString()}
            </span>
          </div>

          <div className="flex justify-between">
            <span className="text-muted-foreground">Additional Charges</span>

            <span className="font-semibold">
              ৳ {additional.toLocaleString()}
            </span>
          </div>

          <div className="flex justify-between border-t border-border pt-3">
            <span className="font-semibold">Subtotal</span>

            <span className="font-semibold">৳ {subtotal.toLocaleString()}</span>
          </div>

          <div className="border-t border-border pt-3">
            <div className="flex justify-between">
              <span className="font-black">Final Amount</span>

              <span className="text-xl font-black text-emerald-600">
                ৳ {finalAmount.toLocaleString()}
              </span>
            </div>
          </div>
        </div>
      </div>
    </div>
  );
}

export default QuotationPricingSection;
