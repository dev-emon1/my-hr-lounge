import type { Addon } from "../../types/addon.types";

type Props = {
  addon: Addon;
};

function AddonFeaturesCard({ addon }: Props) {
  return (
    <div className="rounded-[28px] border border-border p-6">
      <h3 className="text-xl font-black">Included Features</h3>

      <div className="mt-6 flex flex-wrap gap-3">
        {addon.features.map((feature) => (
          <div
            key={feature}
            className="rounded-full border border-border px-4 py-2"
          >
            {feature}
          </div>
        ))}
      </div>
    </div>
  );
}

export default AddonFeaturesCard;
