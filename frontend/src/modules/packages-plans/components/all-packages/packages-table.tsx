import {
  Table,
  TableBody,
  TableCell,
  TableHead,
  TableHeader,
  TableRow,
} from "@/shared/ui/table";

import { Badge } from "@/shared/ui/badge";

import type { Package } from "../../types/package.types";

import PackagesRowActions from "./packages-row-actions";

type Props = {
  packages: Package[];
  onClone?: (pkg: Package) => void;
  onArchive?: (pkg: Package) => void;
};

function PackagesTable({ packages, onClone, onArchive }: Props) {
  return (
    <div className="overflow-hidden rounded-[28px] border border-border">
      <Table>
        <TableHeader>
          <TableRow>
            <TableHead>Package</TableHead>

            <TableHead>Monthly</TableHead>

            <TableHead>Yearly</TableHead>

            <TableHead>Employee Limit</TableHead>

            <TableHead>Clients</TableHead>

            <TableHead>Status</TableHead>

            <TableHead className="w-[70px]" />
          </TableRow>
        </TableHeader>

        <TableBody>
          {packages.map((pkg) => (
            <TableRow key={pkg.id}>
              <TableCell>
                <div>
                  <p className="font-semibold">{pkg.packageName}</p>

                  <p className="text-sm text-muted-foreground">
                    {pkg.packageCode}
                  </p>
                </div>
              </TableCell>

              <TableCell>৳ {pkg.monthlyPrice.toLocaleString()}</TableCell>

              <TableCell>৳ {pkg.yearlyPrice.toLocaleString()}</TableCell>

              <TableCell>{pkg.employeeLimit}</TableCell>

              <TableCell>{pkg.activeClients}</TableCell>

              <TableCell>
                <PackageStatusBadge status={pkg.status} />
              </TableCell>

              <TableCell>
                <PackagesRowActions
                  pkg={pkg}
                  onClone={onClone}
                  onArchive={onArchive}
                />
              </TableCell>
            </TableRow>
          ))}
        </TableBody>
      </Table>
    </div>
  );
}

type BadgeProps = {
  status: Package["status"];
};

function PackageStatusBadge({ status }: BadgeProps) {
  if (status === "Active") {
    return <Badge className="bg-emerald-500/10 text-emerald-600">Active</Badge>;
  }

  if (status === "Draft") {
    return <Badge className="bg-amber-500/10 text-amber-600">Draft</Badge>;
  }

  return <Badge className="bg-slate-500/10 text-slate-600">Archived</Badge>;
}

export default PackagesTable;
