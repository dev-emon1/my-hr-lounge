import { useMemo, useState } from "react";

import { CreditCard } from "lucide-react";

import { packageData } from "../../constants/package-data";

import PackageSelectionCard from "./subscription/package-selection-card";

import CustomPackageBuilder from "./subscription/custom-package-builder";

import PricingSummaryCard from "./subscription/pricing-summary-card";

function SubscriptionSetupSection() {
  const [billingCycle, setBillingCycle] = useState<"monthly" | "yearly">(
    "monthly",
  );

  const [selectedPackageId, setSelectedPackageId] = useState("growth");

  const selectedPackage =
    useMemo(
      () => packageData.find((pkg) => pkg.id === selectedPackageId),
      [selectedPackageId],
    ) ?? packageData[0];

  const currentPrice =
    billingCycle === "monthly"
      ? selectedPackage.monthlyPrice
      : selectedPackage.yearlyPrice;

  return (
    <div className="overflow-hidden rounded-[28px] border border-border bg-card shadow-xl">
      {/* HEADER */}
      <div className="border-b border-border bg-gradient-to-r from-primary/10 to-transparent p-6 lg:p-8">
        <div>
          <div className="inline-flex items-center gap-2 rounded-full border border-primary/20 bg-primary/10 px-4 py-2 text-sm font-semibold text-primary">
            <CreditCard size={16} />
            Subscription Setup
          </div>

          <h2 className="mt-4 text-3xl font-black tracking-tight">
            Configure Client Subscription
          </h2>

          <p className="mt-3 max-w-3xl leading-7 text-muted-foreground">
            Configure package plans, billing, storage allocation, employee
            capacity, module entitlement, and commercial pricing.
          </p>
        </div>
      </div>

      {/* BODY */}
      <div className="grid gap-8 p-6 xl:grid-cols-[minmax(0,1fr)_380px] lg:p-8">
        {/* LEFT */}
        <div className="space-y-8">
          {/* BILLING CYCLE */}
          <div className="rounded-[28px] border border-border p-6">
            <div className="flex flex-col gap-4 lg:flex-row lg:items-center lg:justify-between">
              <div>
                <h3 className="text-xl font-black">Billing Cycle</h3>

                <p className="mt-2 text-sm text-muted-foreground">
                  Select how the client will be billed.
                </p>
              </div>

              <div className="inline-flex rounded-2xl border border-border bg-muted p-1">
                <button
                  type="button"
                  onClick={() => setBillingCycle("monthly")}
                  className={`rounded-xl px-5 py-2 text-sm font-semibold transition-all ${
                    billingCycle === "monthly" ? "bg-background shadow" : ""
                  }`}
                >
                  Monthly
                </button>

                <button
                  type="button"
                  onClick={() => setBillingCycle("yearly")}
                  className={`rounded-xl px-5 py-2 text-sm font-semibold transition-all ${
                    billingCycle === "yearly" ? "bg-background shadow" : ""
                  }`}
                >
                  Yearly
                </button>
              </div>
            </div>
          </div>

          {/* PACKAGE SELECTION */}
          <div>
            <div className="mb-6">
              <h3 className="text-2xl font-black">Select Package</h3>

              <p className="mt-2 text-sm text-muted-foreground">
                Assign the most appropriate plan for this client workspace.
              </p>
            </div>

            <div className="grid gap-6 xl:grid-cols-2">
              {packageData.map((pkg) => (
                <PackageSelectionCard
                  key={pkg.id}
                  pkg={pkg}
                  billingCycle={billingCycle}
                  selected={selectedPackageId === pkg.id}
                  onSelect={setSelectedPackageId}
                />
              ))}
            </div>
          </div>

          {/* CUSTOM BUILDER */}
          {selectedPackageId === "custom" && <CustomPackageBuilder />}

          {/* MODULE ENTITLEMENT */}
          <div className="rounded-[28px] border border-border p-6 lg:p-8">
            <h3 className="text-2xl font-black">Included Modules</h3>

            <p className="mt-2 text-muted-foreground">
              Modules included in the selected package.
            </p>

            <div className="mt-8 flex flex-wrap gap-3">
              {selectedPackage.modules.length ? (
                selectedPackage.modules.map((module) => (
                  <div
                    key={module}
                    className="rounded-full border border-primary/20 bg-primary/10 px-4 py-2 text-sm font-medium text-primary"
                  >
                    {module}
                  </div>
                ))
              ) : (
                <div className="text-sm text-muted-foreground">
                  Custom package modules will be selected manually.
                </div>
              )}
            </div>
          </div>

          {/* PACKAGE DETAILS */}
          <div className="rounded-[28px] border border-border p-6 lg:p-8">
            <h3 className="text-2xl font-black">Package Capacity</h3>

            <div className="mt-8 grid gap-4 md:grid-cols-3">
              <div className="rounded-2xl border border-border p-5">
                <p className="text-sm text-muted-foreground">Employees</p>

                <h4 className="mt-2 text-2xl font-black">
                  {selectedPackage.employees}
                </h4>
              </div>

              <div className="rounded-2xl border border-border p-5">
                <p className="text-sm text-muted-foreground">Admins</p>

                <h4 className="mt-2 text-2xl font-black">
                  {selectedPackage.admins}
                </h4>
              </div>

              <div className="rounded-2xl border border-border p-5">
                <p className="text-sm text-muted-foreground">Storage</p>

                <h4 className="mt-2 text-2xl font-black">
                  {selectedPackage.storage}
                </h4>
              </div>
            </div>
          </div>
        </div>

        {/* RIGHT SIDEBAR */}
        <div>
          <div className="sticky top-6 space-y-6">
            <PricingSummaryCard
              packageName={selectedPackage.name}
              billingCycle={billingCycle}
              price={currentPrice}
            />

            <div className="rounded-[28px] border border-border bg-card p-6 shadow-lg">
              <h3 className="text-xl font-black">Package Snapshot</h3>

              <div className="mt-6 space-y-4">
                <div>
                  <p className="text-xs uppercase tracking-wider text-muted-foreground">
                    Package
                  </p>

                  <p className="mt-1 font-semibold">{selectedPackage.name}</p>
                </div>

                <div>
                  <p className="text-xs uppercase tracking-wider text-muted-foreground">
                    Employees
                  </p>

                  <p className="mt-1 font-semibold">
                    {selectedPackage.employees}
                  </p>
                </div>

                <div>
                  <p className="text-xs uppercase tracking-wider text-muted-foreground">
                    Storage
                  </p>

                  <p className="mt-1 font-semibold">
                    {selectedPackage.storage}
                  </p>
                </div>

                <div>
                  <p className="text-xs uppercase tracking-wider text-muted-foreground">
                    Billing
                  </p>

                  <p className="mt-1 font-semibold capitalize">
                    {billingCycle}
                  </p>
                </div>
              </div>
            </div>

            <div className="rounded-[28px] border border-primary/20 bg-primary/5 p-6">
              <h3 className="font-black text-primary">Revenue Forecast</h3>

              <p className="mt-3 text-sm leading-7 text-muted-foreground">
                Estimated revenue generated based on the selected package
                configuration and billing cycle.
              </p>

              <div className="mt-5 text-4xl font-black text-primary">
                ${currentPrice}
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  );
}

export default SubscriptionSetupSection;
