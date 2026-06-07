function ActiveAddonsTable() {
  const addons = [
    {
      name: "Extra Employee Slots",
      quantity: "200",
      price: "৳ 20,000",
      status: "Active",
    },

    {
      name: "Extra Storage",
      quantity: "100 GB",
      price: "৳ 10,000",
      status: "Active",
    },
  ];

  return (
    <div className="overflow-hidden rounded-[28px] border border-border">
      <div className="border-b border-border p-6">
        <h3 className="text-xl font-black">Active Addons</h3>
      </div>

      <table className="w-full">
        <thead className="bg-muted/40">
          <tr>
            <th className="px-6 py-4 text-left">Addon</th>

            <th className="px-6 py-4 text-left">Quantity</th>

            <th className="px-6 py-4 text-left">Price</th>

            <th className="px-6 py-4 text-left">Status</th>
          </tr>
        </thead>

        <tbody>
          {addons.map((addon) => (
            <tr key={addon.name} className="border-t border-border">
              <td className="px-6 py-5">{addon.name}</td>

              <td className="px-6 py-5">{addon.quantity}</td>

              <td className="px-6 py-5">{addon.price}</td>

              <td className="px-6 py-5">{addon.status}</td>
            </tr>
          ))}
        </tbody>
      </table>
    </div>
  );
}

export default ActiveAddonsTable;
