import { Badge } from "@/shared/ui/badge";

import type { SubscriptionChange } from "../../types/subscription-change.types";

type Props = {
  change: SubscriptionChange;
};

function SubscriptionChangeHeroSection({ change }: Props) {
  return (
    <div className="rounded-[32px] border border-border bg-card/60 p-8">
      <div className="flex flex-col gap-6 lg:flex-row lg:items-center lg:justify-between">
        <div>
          <h1 className="text-4xl font-black">{change.requestNumber}</h1>

          <p className="mt-3 text-muted-foreground">{change.clientName}</p>
        </div>

        <div className="flex flex-wrap gap-3">
          <Badge>{change.changeType}</Badge>

          <Badge variant="secondary">{change.status}</Badge>

          <Badge variant="outline">
            ৳ {change.estimatedAmount.toLocaleString()}
          </Badge>
        </div>
      </div>
    </div>
  );
}

export default SubscriptionChangeHeroSection;
