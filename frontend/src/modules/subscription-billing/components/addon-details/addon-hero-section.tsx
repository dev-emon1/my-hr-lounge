import type { Addon } from "../../types/addon.types";

type Props = {
  addon: Addon;
};

function AddonHeroSection({ addon }: Props) {
  return (
    <div className="rounded-[32px] border border-border bg-card/60 p-8">
      <div className="flex flex-col gap-6 lg:flex-row lg:items-center lg:justify-between">
        <div>
          <h1 className="text-4xl font-black">{addon.name}</h1>

          <p className="mt-2 text-muted-foreground">{addon.description}</p>
        </div>

        <div>
          <span
            className={`inline-flex rounded-full px-4 py-2 text-sm font-semibold ${
              addon.status === "Active"
                ? "bg-green-500/10 text-green-600"
                : "bg-red-500/10 text-red-600"
            }`}
          >
            {addon.status}
          </span>
        </div>
      </div>
    </div>
  );
}

export default AddonHeroSection;
