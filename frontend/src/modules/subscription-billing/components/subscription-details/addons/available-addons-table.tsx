import { Button } from "@/shared/ui/button";

function AvailableAddonsTable() {
  const addons = [
    {
      name: "Additional Branches",
      price: "৳ 5,000",
    },

    {
      name: "Performance Module",
      price: "৳ 15,000",
    },

    {
      name: "Recruitment Module",
      price: "৳ 20,000",
    },
  ];

  return (
    <div className="overflow-hidden rounded-[28px] border border-border">
      <div className="border-b border-border p-6">
        <h3 className="text-xl font-black">Available Addons</h3>
      </div>

      <table className="w-full">
        <thead className="bg-muted/40">
          <tr>
            <th className="px-6 py-4 text-left">Addon</th>

            <th className="px-6 py-4 text-left">Price</th>

            <th className="px-6 py-4 text-right">Action</th>
          </tr>
        </thead>

        <tbody>
          {addons.map((addon) => (
            <tr key={addon.name} className="border-t border-border">
              <td className="px-6 py-5">{addon.name}</td>

              <td className="px-6 py-5">{addon.price}</td>

              <td className="px-6 py-5 text-right">
                <Button size="sm">Purchase</Button>
              </td>
            </tr>
          ))}
        </tbody>
      </table>
    </div>
  );
}

export default AvailableAddonsTable;
