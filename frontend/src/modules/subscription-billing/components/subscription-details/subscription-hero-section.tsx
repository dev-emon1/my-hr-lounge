import { Badge } from "@/shared/ui/badge";

function SubscriptionHeroSection() {
  return (
    <div className="rounded-[32px] border border-border bg-card/60 p-8">
      <div className="flex flex-col gap-6 lg:flex-row lg:items-center lg:justify-between">
        <div>
          <h1 className="text-4xl font-black">Enterprise Subscription</h1>

          <p className="mt-3 text-muted-foreground">Acme Corporation</p>
        </div>

        <div className="flex flex-wrap gap-3">
          <Badge>Active</Badge>

          <Badge variant="secondary">Yearly Billing</Badge>

          <Badge variant="outline">Enterprise Package</Badge>
        </div>
      </div>
    </div>
  );
}

export default SubscriptionHeroSection;
