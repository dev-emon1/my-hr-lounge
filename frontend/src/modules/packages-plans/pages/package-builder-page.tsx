import { useParams } from "react-router-dom";

import PackageBuilderForm from "../components/package-builder/package-builder-form";

import { useGetPackageBySlugQuery } from "../api/package-builder-api";
import { mapPackageToBuilder } from "../utils/package-builder-mapper";

function PackageBuilderPage() {
  const { packageCode } = useParams();

  const isEdit = !!packageCode;

  const { data, isLoading, isError } = useGetPackageBySlugQuery(
    packageCode ?? "",
    {
      skip: !isEdit,
    },
  );

  const initialData = data ? mapPackageToBuilder(data.data) : undefined;

  if (isEdit && isLoading) {
    return (
      <div className="rounded-[28px] border border-border p-8">
        Loading package...
      </div>
    );
  }

  if (isEdit && isError) {
    return (
      <div className="rounded-[28px] border border-border p-8">
        Failed to load package.
      </div>
    );
  }

  return (
    <PackageBuilderForm
      mode={isEdit ? "edit" : "create"}
      initialData={initialData}
    />
  );
}

export default PackageBuilderPage;
