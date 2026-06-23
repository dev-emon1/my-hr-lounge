import type { Quotation } from "../types/quotation.types";

export const mockQuotations: Quotation[] = [
  {
    id: "1",

    quotationNumber: "QT-2026-001",

    // CLIENT
    client: "Acme Corporation",
    contactPerson: "John Smith",
    email: "john.smith@acme.com",
    phone: "+8801712345678",
    industry: "Software Company",

    // PACKAGE
    packageName: "enterprise",
    billingCycle: "Yearly",

    employeeCapacity: "1000",
    storageAllocation: "500",

    employeeLimit: 1000,
    storageLimit: "500 GB",
    branchLimit: "Unlimited",
    supportPlan: "Priority Support",

    // PRICING
    basePrice: 80000,
    discount: 5000,
    tax: 15,
    additionalCharges: 10000,

    addonCost: 10000,
    finalPrice: 97750,

    amount: "৳ 97,750",

    // DATES
    issueDate: "2026-06-05",
    expiryDate: "2026-07-05",

    validityDays: 30,

    // TERMS
    paymentTerms: "100% Advance Payment",

    commercialNotes:
      "Enterprise implementation with dedicated onboarding support.",

    termsAndConditions: `1. Subscription fees are billed according to the selected billing cycle.

2. Client onboarding begins after payment confirmation.

3. Additional modules may incur additional charges.

4. Quotation validity is limited to the selected validity period.

5. Pricing is confidential and intended only for the recipient organization.`,

    internalNotes: "Approved by Sales Director. Priority onboarding requested.",

    // MODULES
    modules: [
      "Core HR",
      "Attendance",
      "Payroll",
      "Recruitment",
      "Performance",
      "Leave Management",
      "Asset Management",
      "Reports & Analytics",
    ],

    // STATUS
    status: "Approved",

    approvalStatus: "Completed",

    onboardingStatus: "Pending",

    conversionStatus: "Not Converted",

    // TIMELINE
    timeline: [
      {
        id: 1,
        title: "Quotation Draft Created",
        date: "01 Jun 2026",
      },
      {
        id: 2,
        title: "Quotation Sent To Client",
        date: "02 Jun 2026",
      },
      {
        id: 3,
        title: "Client Approved Quotation",
        date: "05 Jun 2026",
      },
      {
        id: 4,
        title: "Client Onboarding Pending",
        date: "05 Jun 2026",
      },
    ],
  },

  {
    id: "2",

    quotationNumber: "QT-2026-002",

    // CLIENT
    client: "NextGen Solutions",
    contactPerson: "Sarah Ahmed",
    email: "sarah@nextgen.com",
    phone: "+8801812345678",
    industry: "Software Company",

    // PACKAGE
    packageName: "growth",
    billingCycle: "Monthly",

    employeeCapacity: "500",
    storageAllocation: "100",

    employeeLimit: 300,
    storageLimit: "100 GB",
    branchLimit: "10",
    supportPlan: "Standard Support",

    // PRICING
    basePrice: 40000,
    discount: 2000,
    tax: 15,
    additionalCharges: 1000,

    addonCost: 1000,
    finalPrice: 44850,

    amount: "৳ 44,850",

    // DATES
    issueDate: "2026-06-05",
    expiryDate: "2026-07-05",

    validityDays: 30,

    // TERMS
    paymentTerms: "100% Advance Payment",

    commercialNotes: "Growth package with standard onboarding process.",

    termsAndConditions: `1. Subscription fees are billed according to the selected billing cycle.

2. Client onboarding begins after payment confirmation.

3. Additional modules may incur additional charges.

4. Quotation validity is limited to the selected validity period.

5. Pricing is confidential and intended only for the recipient organization.`,

    internalNotes: "Waiting for client commercial approval.",

    // MODULES
    modules: ["Core HR", "Attendance", "Payroll", "Recruitment"],

    // STATUS
    status: "Sent",

    approvalStatus: "Waiting",

    onboardingStatus: "Not Started",

    conversionStatus: "Not Converted",

    // TIMELINE
    timeline: [
      {
        id: 1,
        title: "Quotation Draft Created",
        date: "05 Jun 2026",
      },
      {
        id: 2,
        title: "Quotation Sent To Client",
        date: "06 Jun 2026",
      },
    ],
  },
];
