import { Receipt, Users, Shield, Database, Layers3 } from "lucide-react";

import { Card } from "@/shared/ui/card";

import { Button } from "@/shared/ui/button";

import { cn } from "@/shared/lib/utils";

import type { Package } from "../../types/package.types";

type Props = {
  selectedPackage: Package;

  billingCycle: "monthly" | "yearly";

  setBillingCycle: (cycle: "monthly" | "yearly") => void;
};

function BillingSummaryCard({
  selectedPackage,

  billingCycle,

  setBillingCycle,
}: Props) {
  const subtotal =
    billingCycle === "monthly"
      ? selectedPackage.monthlyPrice
      : selectedPackage.yearlyPrice;

  const discount = selectedPackage.discount || 0;

  const setupFee = selectedPackage.setupFee || 0;

  const discountAmount = (subtotal * discount) / 100;

  const finalTotal = subtotal - discountAmount + setupFee;

  return (
    <Card className="overflow-hidden rounded-[32px] border-border bg-card/60 p-8 shadow-2xl backdrop-blur-xl">
      {/* HEADER */}
      <div className="mb-8 flex items-start gap-4">
        <div className="flex h-14 w-14 items-center justify-center rounded-3xl bg-primary/10 text-primary">
          <Receipt size={26} />
        </div>

        <div>
          <h2 className="text-2xl font-black tracking-tight">
            Billing Summary
          </h2>

          <p className="mt-2 text-muted-foreground">
            Real-time subscription and infrastructure summary.
          </p>
        </div>
      </div>

      {/* BILLING TOGGLE */}
      <div className="mb-8 grid grid-cols-2 rounded-2xl border border-border bg-background/40 p-1">
        <button
          type="button"
          onClick={() => setBillingCycle("monthly")}
          className={cn(
            "h-11 rounded-xl text-sm font-bold transition-all duration-300",
            billingCycle === "monthly"
              ? "bg-primary text-primary-foreground shadow-lg"
              : "text-muted-foreground",
          )}
        >
          Monthly
        </button>

        <button
          type="button"
          onClick={() => setBillingCycle("yearly")}
          className={cn(
            "h-11 rounded-xl text-sm font-bold transition-all duration-300",
            billingCycle === "yearly"
              ? "bg-primary text-primary-foreground shadow-lg"
              : "text-muted-foreground",
          )}
        >
          Yearly
        </button>
      </div>

      {/* PACKAGE */}
      <div className="rounded-3xl border border-border bg-background/30 p-6">
        <div className="flex items-center justify-between">
          <div>
            <p className="text-sm text-muted-foreground">Selected Package</p>

            <h3 className="mt-1 text-2xl font-black">{selectedPackage.name}</h3>
          </div>

          <div className="text-right">
            <p className="text-sm text-muted-foreground">Modules</p>

            <p className="text-2xl font-black">
              {selectedPackage.modules.length}
            </p>
          </div>
        </div>
      </div>

      {/* INFRA */}
      <div className="mt-8 space-y-4">
        <div className="flex items-center justify-between rounded-2xl border border-border bg-background/20 p-4">
          <div className="flex items-center gap-3">
            <Users size={18} className="text-primary" />

            <span className="font-medium">Employees</span>
          </div>

          <span className="font-black">{selectedPackage.employees}</span>
        </div>

        <div className="flex items-center justify-between rounded-2xl border border-border bg-background/20 p-4">
          <div className="flex items-center gap-3">
            <Shield size={18} className="text-primary" />

            <span className="font-medium">Admins</span>
          </div>

          <span className="font-black">{selectedPackage.admins}</span>
        </div>

        <div className="flex items-center justify-between rounded-2xl border border-border bg-background/20 p-4">
          <div className="flex items-center gap-3">
            <Database size={18} className="text-primary" />

            <span className="font-medium">Storage</span>
          </div>

          <span className="font-black">{selectedPackage.storage}</span>
        </div>

        <div className="flex items-center justify-between rounded-2xl border border-border bg-background/20 p-4">
          <div className="flex items-center gap-3">
            <Layers3 size={18} className="text-primary" />

            <span className="font-medium">Modules</span>
          </div>

          <span className="font-black">{selectedPackage.modules.length}</span>
        </div>
      </div>

      {/* BILLING */}
      <div className="mt-8 rounded-3xl border border-border bg-background/20 p-6">
        <div className="space-y-4">
          <div className="flex items-center justify-between">
            <span className="text-muted-foreground">Subtotal</span>

            <span className="font-bold">৳{subtotal.toLocaleString()}</span>
          </div>

          <div className="flex items-center justify-between">
            <span className="text-muted-foreground">Discount</span>

            <span className="font-bold text-green-500">- {discount}%</span>
          </div>

          <div className="flex items-center justify-between">
            <span className="text-muted-foreground">Setup Fee</span>

            <span className="font-bold">৳{setupFee.toLocaleString()}</span>
          </div>

          <div className="border-t border-border pt-4">
            <div className="flex items-center justify-between">
              <span className="text-lg font-black">Final Total</span>

              <span className="text-4xl font-black tracking-tight">
                ৳{finalTotal.toLocaleString()}
              </span>
            </div>
          </div>
        </div>
      </div>

      {/* ACTION */}
      <Button className="mt-8 h-14 w-full rounded-2xl text-base font-black">
        Create Client Workspace
      </Button>
    </Card>
  );
}

export default BillingSummaryCard;
