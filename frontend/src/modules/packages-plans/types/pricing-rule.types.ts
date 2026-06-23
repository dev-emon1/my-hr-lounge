export interface PricingRule {
  id: string;

  title: string;

  description: string;

  ruleType: "Discount" | "Upgrade" | "Downgrade" | "Renewal";

  status: "Active" | "Inactive";
}
