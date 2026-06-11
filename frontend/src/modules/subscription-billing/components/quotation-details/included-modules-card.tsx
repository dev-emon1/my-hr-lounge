import { Quotation } from "../../types/quotation.types";

type Props = {
  quotation: Quotation;
};

function IncludedModulesCard({ quotation }: Props) {
  return (
    <div className="rounded-[28px] border border-border p-6">
      <h3 className="text-xl font-black">Included Modules</h3>

      <div className="mt-6 flex flex-wrap gap-3">
        {quotation.modules?.map((module) => (
          <div
            key={module}
            className="rounded-full border border-border px-4 py-2"
          >
            {module}
          </div>
        ))}

        {!quotation.modules?.length && (
          <p className="text-sm text-muted-foreground">No modules assigned.</p>
        )}
      </div>
    </div>
  );
}

export default IncludedModulesCard;
