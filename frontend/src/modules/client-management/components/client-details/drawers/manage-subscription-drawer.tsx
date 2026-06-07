import { Sheet, SheetContent } from "@/shared/ui/sheet";

import { Tabs, TabsContent, TabsList, TabsTrigger } from "@/shared/ui/tabs";

import { Button } from "@/shared/ui/button";
import SubscriptionOverviewCard from "../subscription-overview-card";
import SubscriptionBillingTab from "./tabs/subscription-billing-tab";
import SubscriptionOverridesTab from "./tabs/subscription-overrides-tab";
import SubscriptionHistoryTab from "./tabs/subscription-history-tab";

type Props = {
  open: boolean;

  onOpenChange: (open: boolean) => void;
};

function ManageSubscriptionDrawer({ open, onOpenChange }: Props) {
  return (
    <Sheet open={open} onOpenChange={onOpenChange}>
      <SheetContent className="w-full overflow-y-auto sm:max-w-[1200px]">
        <div className="border-b border-border p-8">
          <h2 className="text-3xl font-black">Manage Subscription</h2>

          <p className="mt-2 text-muted-foreground">
            Upgrade, downgrade, renew and customize subscription settings.
          </p>
        </div>

        <div className="p-8">
          <Tabs defaultValue="overview" className="w-full">
            <TabsList>
              <TabsTrigger value="overview">Overview</TabsTrigger>

              <TabsTrigger value="billing">Billing</TabsTrigger>

              <TabsTrigger value="overrides">Overrides</TabsTrigger>

              <TabsTrigger value="history">History</TabsTrigger>
            </TabsList>

            <TabsContent value="overview">
              <SubscriptionOverviewCard />
            </TabsContent>

            <TabsContent value="billing">
              <SubscriptionBillingTab />
            </TabsContent>

            <TabsContent value="overrides">
              <SubscriptionOverridesTab />
            </TabsContent>

            <TabsContent value="history">
              <SubscriptionHistoryTab />
            </TabsContent>
          </Tabs>
        </div>

        <div className="sticky bottom-0 flex justify-end gap-3 border-t border-border bg-background p-6">
          <Button variant="outline" onClick={() => onOpenChange(false)}>
            Cancel
          </Button>

          <Button>Save Changes</Button>
        </div>
      </SheetContent>
    </Sheet>
  );
}

export default ManageSubscriptionDrawer;
