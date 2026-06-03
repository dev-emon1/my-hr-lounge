import ClientsStats from "../components/all-clients/clients-stats";

import ClientsToolbar from "../components/all-clients/clients-toolbar";

import ClientTable from "../components/all-clients/client-table";
import { Client } from "../types/client.types";

function AllClientsPage() {
  const clients: Client[] = [
    {
      id: "1",

      companyName: "Acme Corporation",

      slug: "acme-corporation",

      email: "admin@acme.com",

      phone: "+8801712345678",

      packageName: "Enterprise",

      employees: 420,

      storageUsed: "18 GB / 50 GB",

      status: "active",

      createdAt: "12 May 2026",
    },

    {
      id: "2",

      companyName: "NextGen Solutions",

      slug: "nextgen-solutions",

      email: "hello@nextgen.com",

      phone: "+8801811111111",

      packageName: "Growth",

      employees: 120,

      storageUsed: "3 GB / 10 GB",

      status: "trial",

      createdAt: "20 May 2026",
    },

    {
      id: "3",

      companyName: "Vertex Labs",

      slug: "vertex-labs",

      email: "support@vertexlabs.com",

      phone: "+8801912345678",

      packageName: "Starter",

      employees: 35,

      storageUsed: "1 GB / 5 GB",

      status: "suspended",

      createdAt: "01 April 2026",
    },
  ];

  return (
    <div className="space-y-8">
      {/* PAGE HEADER */}
      <div className="flex flex-col gap-4 lg:flex-row lg:items-center lg:justify-between">
        <div>
          <h1 className="text-4xl font-black tracking-tight">All Clients</h1>

          <p className="mt-2 text-muted-foreground">
            Manage all subscribed tenants, packages, storage, and platform
            activity.
          </p>
        </div>
      </div>

      {/* STATS */}
      <ClientsStats />

      {/* MAIN CARD */}
      <div className="rounded-[32px] border border-border bg-card/60 p-6 shadow-2xl backdrop-blur-xl lg:p-8">
        {/* TITLE */}
        <div className="mb-8">
          <h2 className="text-2xl font-black tracking-tight">
            Client Directory
          </h2>

          <p className="mt-2 text-muted-foreground">
            View all tenants, subscription details, package usage, and current
            platform status.
          </p>
        </div>

        {/* TOOLBAR */}
        <ClientsToolbar />

        {/* TABLE */}
        <div className="mt-8">
          <ClientTable clients={clients} />
        </div>
      </div>
    </div>
  );
}

export default AllClientsPage;
