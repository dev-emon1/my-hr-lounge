import InvoicesStats from "../components/invoices/invoices-stats";
import InvoicesToolbar from "../components/invoices/invoices-toolbar";
import InvoicesTable from "../components/invoices/invoices-table";
import { useState } from "react";
import { Invoice } from "../types/invoice.types";
import MarkAsPaidDialog from "../components/invoices/dialogs/mark-as-paid-dialog";
import SendInvoiceReminderDialog from "../components/invoices/dialogs/send-invoice-reminder-dialog";
import CancelInvoiceDialog from "../components/invoices/dialogs/cancel-invoice-dialog";
import ResendInvoiceDialog from "../components/invoices/dialogs/resend-invoice-dialog";

function InvoicesPage() {
  const [selectedInvoice, setSelectedInvoice] = useState<Invoice | null>(null);

  const [markPaidOpen, setMarkPaidOpen] = useState(false);

  const [reminderOpen, setReminderOpen] = useState(false);

  const [resendOpen, setResendOpen] = useState(false);

  const [cancelOpen, setCancelOpen] = useState(false);

  const invoices: Invoice[] = [
    {
      id: "1",
      invoiceNumber: "INV-2026-001",
      client: "Acme Corporation",
      type: "Renewal",
      amount: "৳ 50,000",
      issueDate: "01 Jun 2026",
      dueDate: "10 Jun 2026",
      status: "Pending",
      email: "admin@acme.com",
    },

    {
      id: "2",
      invoiceNumber: "INV-2026-002",
      client: "NextGen Solutions",
      type: "Upgrade",
      amount: "৳ 25,000",
      issueDate: "03 Jun 2026",
      dueDate: "13 Jun 2026",
      status: "Draft",
      email: "billing@nextgen.com",
    },
  ];

  return (
    <>
      <div className="space-y-8">
        <div>
          <h1 className="text-4xl font-black tracking-tight">Invoices</h1>

          <p className="mt-2 text-muted-foreground">
            Manage billing invoices, payment collection and outstanding
            balances.
          </p>
        </div>

        <InvoicesStats />

        <div className="rounded-[32px] border border-border bg-card/60 p-6 shadow-2xl backdrop-blur-xl lg:p-8">
          <div className="mb-8">
            <h2 className="text-2xl font-black tracking-tight">
              Invoice Directory
            </h2>

            <p className="mt-2 text-muted-foreground">
              Review and manage all client invoices.
            </p>
          </div>

          <InvoicesToolbar />

          <div className="mt-8">
            <InvoicesTable
              invoices={invoices}
              onMarkPaid={(invoice) => {
                setSelectedInvoice(invoice);

                setMarkPaidOpen(true);
              }}
              onReminder={(invoice) => {
                setSelectedInvoice(invoice);

                setReminderOpen(true);
              }}
              onResend={(invoice) => {
                setSelectedInvoice(invoice);

                setResendOpen(true);
              }}
              onCancel={(invoice) => {
                setSelectedInvoice(invoice);

                setCancelOpen(true);
              }}
            />
          </div>
        </div>
      </div>

      <MarkAsPaidDialog
        open={markPaidOpen}
        onOpenChange={setMarkPaidOpen}
        invoice={selectedInvoice}
      />

      <SendInvoiceReminderDialog
        open={reminderOpen}
        onOpenChange={setReminderOpen}
        invoice={selectedInvoice}
      />

      <ResendInvoiceDialog
        open={resendOpen}
        onOpenChange={setResendOpen}
        invoice={selectedInvoice}
      />

      <CancelInvoiceDialog
        open={cancelOpen}
        onOpenChange={setCancelOpen}
        invoice={selectedInvoice}
      />
    </>
  );
}

export default InvoicesPage;
