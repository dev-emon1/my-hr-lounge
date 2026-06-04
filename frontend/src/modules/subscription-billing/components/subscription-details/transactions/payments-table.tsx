function PaymentsTable() {
  const payments = [
    {
      id: "TXN-1001",
      amount: "৳ 50,000",
      method: "Bank Transfer",
      date: "12 May 2026",
    },
  ];

  return (
    <div className="overflow-hidden rounded-[28px] border border-border">
      <table className="w-full">
        <thead className="bg-muted/40">
          <tr>
            <th className="px-6 py-4 text-left">Transaction ID</th>

            <th className="px-6 py-4 text-left">Amount</th>

            <th className="px-6 py-4 text-left">Method</th>

            <th className="px-6 py-4 text-left">Date</th>
          </tr>
        </thead>

        <tbody>
          {payments.map((payment) => (
            <tr key={payment.id} className="border-t border-border">
              <td className="px-6 py-5">{payment.id}</td>

              <td className="px-6 py-5">{payment.amount}</td>

              <td className="px-6 py-5">{payment.method}</td>

              <td className="px-6 py-5">{payment.date}</td>
            </tr>
          ))}
        </tbody>
      </table>
    </div>
  );
}

export default PaymentsTable;
