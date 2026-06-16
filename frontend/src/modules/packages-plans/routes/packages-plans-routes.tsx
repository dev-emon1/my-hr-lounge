import type { RouteObject } from "react-router-dom";

import AllPackagesPage from "../pages/all-packages-page";
import PackageDetailsPage from "../pages/package-details-page";
import PackageBuilderPage from "../pages/package-builder-page";

// import PackageBuilderPage from "../pages/package-builder-page";
// import FeatureMatrixPage from "../pages/feature-matrix-page";
// import ModuleAssignmentPage from "../pages/module-assignment-page";
// import PricingRulesPage from "../pages/pricing-rules-page";
// import TrialPlansPage from "../pages/trial-plans-page";
// import CustomPlansPage from "../pages/custom-plans-page";

export const packagesPlansRoutes: RouteObject[] = [
  {
    path: "packages",

    element: <AllPackagesPage />,
  },

  {
    path: "packages-plans/packages/:packageCode",

    element: <PackageDetailsPage />,
  },

  {
    path: "packages-plans/package-builder",

    element: <PackageBuilderPage />,
  },

  {
    path: "packages-plans/feature-matrix",

    //  element: <FeatureMatrixPage />,
  },

  {
    path: "packages-plans/module-assignment",

    //  element: <ModuleAssignmentPage />,
  },

  {
    path: "packages-plans/pricing-rules",

    //  element: <PricingRulesPage />,
  },

  {
    path: "packages-plans/trial-plans",

    //  element: <TrialPlansPage />,
  },

  {
    path: "packages-plans/custom-plans",

    //  element: <CustomPlansPage />,
  },
];
