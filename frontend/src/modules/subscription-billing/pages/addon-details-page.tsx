import { useParams } from "react-router-dom";

import { mockAddons } from "../constants/mock-addons";

import AddonHeroSection from "../components/addon-details/addon-hero-section";
import AddonInformationCard from "../components/addon-details/addon-information-card";
import AddonPricingCard from "../components/addon-details/addon-pricing-card";
import AddonFeaturesCard from "../components/addon-details/addon-features-card";
import AddonClientsCard from "../components/addon-details/addon-clients-card";
import AddonRevenueCard from "../components/addon-details/addon-revenue-card";

function AddonDetailsPage() {
  const { addonId } = useParams();

  const addon = mockAddons.find((item) => item.id === addonId);

  if (!addon) {
    return (
      <div className="rounded-3xl border border-border p-10 text-center">
        Addon not found.
      </div>
    );
  }

  return (
    <div className="space-y-8">
      <AddonHeroSection addon={addon} />

      <div className="grid gap-8 xl:grid-cols-[minmax(0,1fr)_380px]">
        <div className="space-y-8">
          <AddonInformationCard addon={addon} />

          <AddonPricingCard addon={addon} />

          <AddonFeaturesCard addon={addon} />
        </div>

        <div>
          <div className="sticky top-6 space-y-6">
            <AddonRevenueCard addon={addon} />

            <AddonClientsCard addon={addon} />
          </div>
        </div>
      </div>
    </div>
  );
}

export default AddonDetailsPage;
