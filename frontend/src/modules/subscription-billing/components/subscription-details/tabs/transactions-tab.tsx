import { Tabs, TabsContent, TabsList, TabsTrigger } from "@/shared/ui/tabs";

import TransactionSummaryCards from "../transactions/transaction-summary-cards";

import PaymentsTable from "../transactions/payments-table";

import FailedPaymentsTable from "../transactions/failed-payments-table";

import RefundsTable from "../transactions/refunds-table";

import CreditNotesTable from "../transactions/credit-notes-table";

function TransactionsTab() {
  return (
    <div className="space-y-8">
      <TransactionSummaryCards />

      <Tabs defaultValue="payments">
        <TabsList>
          <TabsTrigger value="payments">Payments</TabsTrigger>

          <TabsTrigger value="failed">Failed Payments</TabsTrigger>

          <TabsTrigger value="refunds">Refunds</TabsTrigger>

          <TabsTrigger value="credits">Credit Notes</TabsTrigger>
        </TabsList>

        <TabsContent value="payments">
          <PaymentsTable />
        </TabsContent>

        <TabsContent value="failed">
          <FailedPaymentsTable />
        </TabsContent>

        <TabsContent value="refunds">
          <RefundsTable />
        </TabsContent>

        <TabsContent value="credits">
          <CreditNotesTable />
        </TabsContent>
      </Tabs>
    </div>
  );
}

export default TransactionsTab;
