import { ArrowLeft, Download, Send } from "lucide-react";

import { Button } from "@/shared/ui/button";

import { useNavigate, useParams } from "react-router-dom";

import { useQuotationStore } from "../store/quotation-store";

function QuotationPreviewPage() {
  const navigate = useNavigate();

  const { quotationId } = useParams();

  const quotation = useQuotationStore((state) => state.quotation);

  const basePrice = quotation.basePrice || 0;

  const discount = quotation.discount || 0;

  const tax = quotation.tax || 0;

  const additional = quotation.additionalCharges || 0;

  const subtotal = Math.max(0, basePrice - discount + additional);

  const taxAmount = (subtotal * tax) / 100;

  const finalAmount = subtotal + taxAmount;

  return (
    <div className="space-y-8">
      {/* HEADER */}
      <div className="flex flex-col gap-4 lg:flex-row lg:items-center lg:justify-between">
        <div>
          <h1 className="text-4xl font-black tracking-tight">
            Quotation Preview
          </h1>

          <p className="mt-2 text-muted-foreground">
            Review quotation before sending to the client.
          </p>
        </div>

        <div className="flex flex-wrap gap-3">
          <Button
            variant="outline"
            onClick={() => navigate(`/billing/quotations/${quotationId}/edit`)}
          >
            <ArrowLeft size={16} />
            Back To Edit
          </Button>

          <Button variant="outline">
            <Download size={16} />
            Download PDF
          </Button>

          <Button>
            <Send size={16} />
            Send Quotation
          </Button>
        </div>
      </div>

      {/* DOCUMENT */}
      <div className="mx-auto max-w-5xl rounded-[32px] border border-border bg-card p-10 shadow-2xl">
        {/* TOP */}
        <div className="flex flex-col gap-8 border-b border-border pb-8 lg:flex-row lg:justify-between">
          <div>
            <h2 className="text-4xl font-black">QUOTATION</h2>

            <p className="mt-2 text-muted-foreground">{quotationId}</p>
          </div>

          <div className="space-y-2 text-sm">
            <div>
              <span className="font-semibold">Issue Date:</span> 10 Jun 2026
            </div>

            <div>
              <span className="font-semibold">Valid Until:</span>{" "}
              {quotation.validityDays
                ? `${quotation.validityDays} Days`
                : "Not Defined"}
            </div>
          </div>
        </div>

        {/* CLIENT */}
        <div className="mt-10">
          <h3 className="text-xl font-black">Client Information</h3>

          <div className="mt-6 grid gap-4 md:grid-cols-2">
            <InfoItem
              label="Company"
              value={quotation.companyName || "Not Provided"}
            />

            <InfoItem
              label="Contact Person"
              value={quotation.contactPerson || "Not Provided"}
            />

            <InfoItem label="Email" value={quotation.email || "Not Provided"} />

            <InfoItem label="Phone" value={quotation.phone || "Not Provided"} />
          </div>
        </div>

        {/* PACKAGE */}
        <div className="mt-10">
          <h3 className="text-xl font-black">Package Information</h3>

          <div className="mt-6 grid gap-4 md:grid-cols-2">
            <InfoItem
              label="Package"
              value={quotation.packageName || "Not Selected"}
            />

            <InfoItem
              label="Billing Cycle"
              value={quotation.billingCycle || "Not Selected"}
            />

            <InfoItem
              label="Employees"
              value={quotation.employeeCapacity || "Not Selected"}
            />

            <InfoItem
              label="Storage"
              value={quotation.storageAllocation || "Not Selected"}
            />
          </div>
        </div>

        {/* PRICING */}
        <div className="mt-10">
          <h3 className="text-xl font-black">Pricing Breakdown</h3>

          <div className="mt-6 overflow-hidden rounded-2xl border border-border">
            <div className="flex justify-between border-b border-border p-4">
              <span>Base Price</span>

              <span>৳ {basePrice.toLocaleString()}</span>
            </div>

            <div className="flex justify-between border-b border-border p-4">
              <span>Discount</span>

              <span>- ৳ {discount.toLocaleString()}</span>
            </div>

            <div className="flex justify-between border-b border-border p-4">
              <span>VAT / Tax</span>

              <span>৳ {taxAmount.toLocaleString()}</span>
            </div>

            <div className="flex justify-between border-b border-border p-4">
              <span>Additional Charges</span>

              <span>৳ {additional.toLocaleString()}</span>
            </div>

            <div className="flex justify-between bg-muted/50 p-4 font-black">
              <span>Final Amount</span>

              <span>৳ {finalAmount.toLocaleString()}</span>
            </div>
          </div>
        </div>

        {/* TERMS */}
        <div className="mt-10">
          <h3 className="text-xl font-black">Terms & Conditions</h3>

          <div className="mt-6 rounded-2xl border border-border p-6">
            <p className="leading-8 text-muted-foreground whitespace-pre-line">
              {quotation.termsAndConditions || "No terms configured."}
            </p>
            <p className="leading-8 text-muted-foreground">
              1. Subscription fees are billed according to the selected billing
              cycle.
              <br />
              <br />
              2. Client onboarding begins after payment confirmation.
              <br />
              <br />
              3. Additional modules may incur additional charges.
            </p>
          </div>
        </div>

        {/* SIGNATURE */}
        <div className="mt-16 flex justify-end">
          <div className="w-72 border-t border-border pt-4 text-center">
            <p className="font-semibold">Authorized Signature</p>

            <p className="mt-2 text-sm text-muted-foreground">
              HRM SaaS Platform
            </p>
          </div>
        </div>
      </div>
    </div>
  );
}

function InfoItem({ label, value }: { label: string; value: string }) {
  return (
    <div>
      <p className="text-xs uppercase tracking-wider text-muted-foreground">
        {label}
      </p>

      <p className="mt-1 font-semibold">{value}</p>
    </div>
  );
}

export default QuotationPreviewPage;
