import { Plus } from "lucide-react";

import { Button } from "@/shared/ui/button";

import CompaniesTable from "../components/companies-table";

import CreateCompanyModal from "../components/create-company-modal";

import { useModalStore } from "@/app/store/zustand/modal-store";

function CompaniesPage() {
  const {
    createCompanyOpen,

    setCreateCompanyOpen,
  } = useModalStore();

  return (
    <div className="space-y-8">
      <div className="flex flex-col justify-between gap-4 md:flex-row md:items-center">
        <div>
          <h1 className="text-4xl font-black tracking-tight">Companies</h1>

          <p className="mt-2 text-muted-foreground">
            Manage tenant companies and subscriptions
          </p>
        </div>

        <Button
          onClick={() => setCreateCompanyOpen(true)}
          className="gap-2 rounded-2xl"
        >
          <Plus size={18} />
          Create Company
        </Button>
      </div>

      <CompaniesTable />

      <CreateCompanyModal
        open={createCompanyOpen}
        onOpenChange={setCreateCompanyOpen}
      />
    </div>
  );
}

export default CompaniesPage;
