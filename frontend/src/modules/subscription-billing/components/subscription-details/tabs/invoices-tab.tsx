import InvoiceSummaryCards from "../invoices/invoice-summary-cards";

import InvoiceFilters from "../invoices/invoice-filters";

import InvoiceTable from "../invoices/invoice-table";

function InvoicesTab() {
  return (
    <div className="space-y-8">
      <InvoiceSummaryCards />

      <InvoiceFilters />

      <InvoiceTable />
    </div>
  );
}

export default InvoicesTab;
