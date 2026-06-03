import ClientInformationSection from "../components/onboarding/client-information-section";

import WorkspaceIdentitySection from "../components/onboarding/workspace-identity-section";

import SubscriptionSetupSection from "../components/onboarding/subscription-setup-section";

import WorkspaceOwnerSection from "../components/onboarding/workspace-owner-section";

import OrganizationStructureSection from "../components/onboarding/organization-structure-section";

import ModuleAccessSection from "../components/onboarding/module-access-section";

import SecurityConfigurationSection from "../components/onboarding/security-configuration-section";

import IntegrationsSection from "../components/onboarding/integrations-section";

import ActivationReviewSection from "../components/onboarding/activation-section";

function ClientOnboardingPage() {
  return (
    <div className="space-y-8">
      <ClientInformationSection />

      <WorkspaceIdentitySection />

      <SubscriptionSetupSection />

      <WorkspaceOwnerSection />

      <OrganizationStructureSection />

      <ModuleAccessSection />

      <SecurityConfigurationSection />

      <IntegrationsSection />

      <ActivationReviewSection />
    </div>
  );
}

export default ClientOnboardingPage;
