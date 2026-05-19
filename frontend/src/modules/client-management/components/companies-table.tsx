import { useMemo, useState } from "react";

import { Download } from "lucide-react";

import type { Table } from "@tanstack/react-table";

import { Button } from "@/shared/ui/button";

import DataTable from "@/shared/components/data-table/data-table";

import DataTableViewOptions from "@/shared/components/data-table/data-table-view-options";

import { exportCSV } from "@/shared/utils/export-csv";

import useCompanies from "../hooks/use-companies";

import { companiesColumns } from "./companies-table-columns";

import CompaniesBulkActions from "./companies-bulk-actions";

import CompaniesFilters from "./companies-filters";

import type { Company } from "../types/company.types";

import { useCompaniesStore } from "../store/companies-store";

function CompaniesTable() {
  const [search, setSearch] = useState("");

  const [status, setStatus] = useState("");

  const [table, setTable] = useState<Table<Company> | undefined>();

  const deleteMultipleCompanies = useCompaniesStore(
    (state) => state.deleteMultipleCompanies,
  );

  const { companies, totalCompanies } = useCompanies({
    search,
    status,
  });

  const selectedRows = useMemo(() => {
    return table?.getSelectedRowModel().rows.map((row) => row.original);
  }, [table]);

  return (
    <div className="space-y-6">
      <CompaniesBulkActions
        selectedCount={selectedRows?.length || 0}
        onDelete={() =>
          deleteMultipleCompanies(
            selectedRows?.map((company) => company.id) || [],
          )
        }
      />

      <div className="flex flex-col gap-4 xl:flex-row xl:items-center xl:justify-between">
        <CompaniesFilters
          search={search}
          onSearchChange={setSearch}
          status={status}
          onStatusChange={setStatus}
        />

        <div className="flex flex-wrap gap-3">
          <Button
            variant="outline"
            className="gap-2"
            onClick={() => exportCSV(companies)}
          >
            <Download size={16} />
            Export CSV
          </Button>

          {table && <DataTableViewOptions table={table} />}
        </div>
      </div>

      <div className="flex items-center justify-between">
        <div>
          <h3 className="text-xl font-black">Companies</h3>

          <p className="text-sm text-muted-foreground">
            Total: {totalCompanies} companies
          </p>
        </div>
      </div>

      <DataTable
        columns={companiesColumns}
        data={companies}
        onTableReady={setTable}
      />
    </div>
  );
}

export default CompaniesTable;
