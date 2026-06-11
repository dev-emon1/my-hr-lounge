import ClientInformationSection from "../components/onboarding/client-information-section";

import WorkspaceIdentitySection from "../components/onboarding/workspace-identity-section";

import SubscriptionSetupSection from "../components/onboarding/subscription-setup-section";

import WorkspaceOwnerSection from "../components/onboarding/workspace-owner-section";

import OrganizationStructureSection from "../components/onboarding/organization-structure-section";

import ModuleAccessSection from "../components/onboarding/module-access-section";

import SecurityConfigurationSection from "../components/onboarding/security-configuration-section";

import IntegrationsSection from "../components/onboarding/integrations-section";

import ActivationReviewSection from "../components/onboarding/activation-section";
import { useLocation } from "react-router-dom";

import type { Quotation } from "@/modules/subscription-billing/types/quotation.types";

type LocationState = {
  quotation?: Quotation;
};

function ClientOnboardingPage() {
  const location = useLocation();

  // const quotation = location.state?.quotation;
  const { quotation } = (location.state as LocationState) || {};

  return (
    <div className="space-y-8">
      {quotation && (
        <div className="rounded-2xl border border-blue-500/20 bg-blue-500/5 p-4">
          <p className="font-medium text-blue-600">
            Client onboarding started from quotation {quotation.quotationNumber}
          </p>

          <p className="mt-1 text-sm text-muted-foreground">
            {quotation.client} • {quotation.packageName} •{" "}
            {quotation.billingCycle}
          </p>
        </div>
      )}

      <ClientInformationSection quotation={quotation} />

      <WorkspaceIdentitySection />

      <SubscriptionSetupSection quotation={quotation} />

      <WorkspaceOwnerSection quotation={quotation} />

      <OrganizationStructureSection />

      <ModuleAccessSection />

      <SecurityConfigurationSection />

      <IntegrationsSection />

      <ActivationReviewSection />
    </div>
  );
}

export default ClientOnboardingPage;
