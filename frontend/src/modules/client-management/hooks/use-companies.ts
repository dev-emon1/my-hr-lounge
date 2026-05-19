import { useMemo } from "react";

import { useCompaniesStore } from "../store/companies-store";

type Props = {
  search: string;

  status: string;
};

function useCompanies({ search, status }: Props) {
  const companies = useCompaniesStore((state) => state.companies);

  const filteredCompanies = useMemo(() => {
    return companies.filter((company) => {
      const matchesSearch = company.companyName
        .toLowerCase()
        .includes(search.toLowerCase());

      const matchesStatus = !status || company.status === status;

      return matchesSearch && matchesStatus;
    });
  }, [companies, search, status]);

  return {
    companies: filteredCompanies,
    totalCompanies: filteredCompanies.length,
  };
}

export default useCompanies;
