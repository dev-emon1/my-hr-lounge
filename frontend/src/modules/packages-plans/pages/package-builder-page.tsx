import { useParams } from "react-router-dom";

import PackageBuilderForm from "../components/package-builder/package-builder-form";

import { mockPackageBuilders } from "../constants/mock-package-builder";

function PackageBuilderPage() {
  const { packageCode } = useParams();

  const existingPackage = mockPackageBuilders.find(
    (pkg) => pkg.packageCode === packageCode,
  );

  // EDIT URL but package not found
  if (packageCode && !existingPackage) {
    return (
      <div className="rounded-[32px] border border-border p-8">
        <h2 className="text-2xl font-black">Package Not Found</h2>

        <p className="mt-2 text-muted-foreground">
          The requested package could not be found.
        </p>
      </div>
    );
  }

  const mode = packageCode ? "edit" : "create";

  return (
    <PackageBuilderForm
      mode={mode}
      // packageCode={packageCode}
      initialData={existingPackage}
    />
  );
}

export default PackageBuilderPage;
