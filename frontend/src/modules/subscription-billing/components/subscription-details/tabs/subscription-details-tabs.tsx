import { Tabs, TabsContent, TabsList, TabsTrigger } from "@/shared/ui/tabs";

import OverviewTab from "./overview-tab";

import BillingTab from "./billing-tab";

import InvoicesTab from "./invoices-tab";

import TransactionsTab from "./transactions-tab";

import AddonsTab from "./addons-tab";

import ChangeHistoryTab from "./change-history-tab";

function SubscriptionDetailsTabs() {
  return (
    <Tabs defaultValue="overview" className="space-y-6">
      <TabsList className="h-auto flex-wrap rounded-2xl p-2">
        <TabsTrigger value="overview">Overview</TabsTrigger>

        <TabsTrigger value="billing">Billing</TabsTrigger>

        <TabsTrigger value="invoices">Invoices</TabsTrigger>

        <TabsTrigger value="transactions">Transactions</TabsTrigger>

        <TabsTrigger value="addons">Addons</TabsTrigger>

        <TabsTrigger value="changes">Change History</TabsTrigger>
      </TabsList>

      <TabsContent value="overview">
        <OverviewTab />
      </TabsContent>

      <TabsContent value="billing">
        <BillingTab />
      </TabsContent>

      <TabsContent value="invoices">
        <InvoicesTab />
      </TabsContent>

      <TabsContent value="transactions">
        <TransactionsTab />
      </TabsContent>

      <TabsContent value="addons">
        <AddonsTab />
      </TabsContent>

      <TabsContent value="changes">
        <ChangeHistoryTab />
      </TabsContent>
    </Tabs>
  );
}

export default SubscriptionDetailsTabs;
