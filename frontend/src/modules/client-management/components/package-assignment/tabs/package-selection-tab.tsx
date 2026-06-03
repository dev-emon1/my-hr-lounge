import { Check } from "lucide-react";

function PackageSelectionTab() {
  const packages = [
    {
      name: "Starter",

      price: "৳15,000",

      employees: "100",

      storage: "50 GB",
    },

    {
      name: "Growth",

      price: "৳50,000",

      employees: "1000",

      storage: "500 GB",
    },

    {
      name: "Enterprise",

      price: "৳120,000",

      employees: "5000",

      storage: "2 TB",
    },

    {
      name: "Custom",

      price: "Custom",

      employees: "Unlimited",

      storage: "Custom",
    },
  ];

  return (
    <div className="space-y-8">
      <div className="grid gap-5 lg:grid-cols-2 xl:grid-cols-4">
        {packages.map((pkg) => (
          <div
            key={pkg.name}
            className="cursor-pointer rounded-[28px] border border-border p-6 transition-all hover:border-primary"
          >
            <h3 className="text-xl font-black">{pkg.name}</h3>

            <p className="mt-4 text-3xl font-black">{pkg.price}</p>

            <div className="mt-6 space-y-3">
              <div className="flex items-center gap-2">
                <Check size={16} />

                <span>{pkg.employees} Employees</span>
              </div>

              <div className="flex items-center gap-2">
                <Check size={16} />

                <span>{pkg.storage} Storage</span>
              </div>
            </div>
          </div>
        ))}
      </div>

      {/* REVENUE IMPACT */}

      <div className="rounded-[28px] border border-primary/20 bg-primary/5 p-6">
        <h3 className="font-bold">Revenue Impact Preview</h3>

        <div className="mt-6 grid gap-5 lg:grid-cols-3">
          <div>
            <p className="text-sm text-muted-foreground">Current Revenue</p>

            <p className="mt-2 text-2xl font-black">৳50,000</p>
          </div>

          <div>
            <p className="text-sm text-muted-foreground">New Revenue</p>

            <p className="mt-2 text-2xl font-black">৳120,000</p>
          </div>

          <div>
            <p className="text-sm text-muted-foreground">Difference</p>

            <p className="mt-2 text-2xl font-black text-green-600">+৳70,000</p>
          </div>
        </div>
      </div>
    </div>
  );
}

export default PackageSelectionTab;
