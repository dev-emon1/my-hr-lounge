import { Badge } from "@/shared/ui/badge";

function QuotationHeroSection() {
  return (
    <div className="rounded-[32px] border border-border bg-card/60 p-8">
      <div className="flex flex-col gap-6 lg:flex-row lg:items-center lg:justify-between">
        <div>
          <h1 className="text-4xl font-black">QT-2026-001</h1>

          <p className="mt-3 text-muted-foreground">Acme Corporation</p>
        </div>

        <div className="flex flex-wrap gap-3">
          <Badge className="bg-green-500/10 text-green-600">Approved</Badge>

          <Badge className="bg-blue-500/10 text-blue-600">Enterprise</Badge>

          <Badge className="bg-green-500/10 text-green-600">৳ 80,000</Badge>

          <Badge className="bg-blue-500/10 text-blue-600">Converted</Badge>
        </div>
      </div>
    </div>
  );
}

export default QuotationHeroSection;
