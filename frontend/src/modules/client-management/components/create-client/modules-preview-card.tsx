import { Layers3 } from "lucide-react";

import { Card } from "@/shared/ui/card";

type Props = {
  modules: string[];
};

function ModulesPreviewCard({ modules }: Props) {
  return (
    <Card className="rounded-[32px] border-border bg-card/60 p-8 shadow-2xl backdrop-blur-xl">
      <div className="mb-8 flex items-start gap-4">
        <div className="flex h-14 w-14 items-center justify-center rounded-3xl bg-primary/10 text-primary">
          <Layers3 size={26} />
        </div>

        <div>
          <h2 className="text-2xl font-black tracking-tight">
            Enabled Modules
          </h2>

          <p className="mt-2 text-muted-foreground">
            Modules included in selected package.
          </p>
        </div>
      </div>

      <div className="flex flex-wrap gap-3">
        {modules.map((module) => (
          <div
            key={module}
            className="rounded-2xl border border-primary/20 bg-primary/10 px-4 py-2 text-sm font-semibold text-primary transition-all duration-300 hover:scale-[1.03]"
          >
            {module}
          </div>
        ))}
      </div>
    </Card>
  );
}

export default ModulesPreviewCard;
