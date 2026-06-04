function InvoiceTable() {
  const invoices = [
    {
      invoiceNo: "INV-1001",
      amount: "৳ 50,000",
      status: "Paid",
      issuedDate: "12 May 2026",
    },

    {
      invoiceNo: "INV-1002",
      amount: "৳ 50,000",
      status: "Pending",
      issuedDate: "12 Jun 2026",
    },

    {
      invoiceNo: "INV-1003",
      amount: "৳ 50,000",
      status: "Overdue",
      issuedDate: "12 Jul 2026",
    },
  ];

  return (
    <div className="overflow-hidden rounded-[28px] border border-border">
      <div className="overflow-x-auto">
        <table className="w-full">
          <thead className="bg-muted/40">
            <tr>
              <th className="px-6 py-4 text-left">Invoice No</th>

              <th className="px-6 py-4 text-left">Amount</th>

              <th className="px-6 py-4 text-left">Status</th>

              <th className="px-6 py-4 text-left">Issued Date</th>
            </tr>
          </thead>

          <tbody>
            {invoices.map((invoice) => (
              <tr
                key={invoice.invoiceNo}
                className="border-t border-border hover:bg-muted/30"
              >
                <td className="px-6 py-5 font-medium">{invoice.invoiceNo}</td>

                <td className="px-6 py-5">{invoice.amount}</td>

                <td className="px-6 py-5">
                  <span
                    className={`rounded-full px-3 py-1 text-xs font-semibold ${
                      invoice.status === "Paid"
                        ? "bg-green-500/10 text-green-600"
                        : invoice.status === "Pending"
                          ? "bg-amber-500/10 text-amber-600"
                          : "bg-red-500/10 text-red-600"
                    }`}
                  >
                    {invoice.status}
                  </span>
                </td>

                <td className="px-6 py-5">{invoice.issuedDate}</td>
              </tr>
            ))}
          </tbody>
        </table>
      </div>
    </div>
  );
}

export default InvoiceTable;
