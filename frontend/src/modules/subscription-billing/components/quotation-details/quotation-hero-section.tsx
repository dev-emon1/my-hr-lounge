import { Badge } from "@/shared/ui/badge";

import type { Quotation } from "../../types/quotation.types";
import { packageLabels } from "../../constants/package-labels";

type Props = {
  quotation: Quotation;
};

function QuotationHeroSection({ quotation }: Props) {
  return (
    <div className="rounded-[32px] border border-border bg-card/60 p-8">
      <div className="flex flex-col gap-6 lg:flex-row lg:items-center lg:justify-between">
        <div>
          <h1 className="text-4xl font-black">{quotation.quotationNumber}</h1>

          <p className="mt-3 text-muted-foreground">{quotation.client}</p>
        </div>

        <div className="flex flex-wrap gap-3">
          <Badge>{quotation.status}</Badge>

          <Badge>
            {" "}
            {packageLabels[quotation.packageName as keyof typeof packageLabels]}
          </Badge>

          <Badge>{quotation.amount}</Badge>
        </div>
      </div>
    </div>
  );
}

export default QuotationHeroSection;
