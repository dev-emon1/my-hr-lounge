import {
  Table,
  TableBody,
  TableCell,
  TableHead,
  TableHeader,
  TableRow,
} from "@/shared/ui/table";

import { Badge } from "@/shared/ui/badge";

import type { PackageListItem } from "../../types/package-list.types";

import PackagesRowActions from "./packages-row-actions";
import EmptyState from "@/shared/components/data-display/empty-state";

type Props = {
  packages: PackageListItem[];
  onClone?: (pkg: PackageListItem) => void;
  onArchive?: (pkg: PackageListItem) => void;
};

function PackagesTable({ packages, onClone, onArchive }: Props) {
  return (
    <div
      className="
    min-h-[520px]
    overflow-hidden
    rounded-[28px]
    border
    border-border
  "
    >
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
          {packages.length > 0 ? (
            packages.map((pkg) => (
              <TableRow key={pkg.id}>
                <TableCell>
                  <div>
                    <p className="font-semibold">{pkg.name}</p>

                    <p className="text-sm text-muted-foreground">{pkg.slug}</p>
                  </div>
                </TableCell>

                <TableCell>
                  ৳ {Number(pkg.pricing.monthly).toLocaleString()}
                </TableCell>

                <TableCell>
                  ৳ {Number(pkg.pricing.yearly).toLocaleString()}
                </TableCell>

                <TableCell>{pkg.limits.employees ?? "Unlimited"}</TableCell>

                <TableCell>-</TableCell>

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
            ))
          ) : (
            <TableRow>
              <TableCell colSpan={7} className="h-[320px]">
                <EmptyState
                  title="No Packages Found"
                  description="Try changing search or filters."
                />
              </TableCell>
            </TableRow>
          )}
        </TableBody>
      </Table>
      <div className="flex items-center justify-between border-t border-border bg-muted/20 px-6 py-4">
        <p className="text-sm text-muted-foreground">
          Showing {packages.length} package
          {packages.length !== 1 ? "s" : ""}
        </p>

        <p className="text-sm text-muted-foreground">
          Total Records: {packages.length}
        </p>
      </div>
    </div>
  );
}

type BadgeProps = {
  status: PackageListItem["status"];
};

function PackageStatusBadge({ status }: BadgeProps) {
  switch (status.value) {
    case "active":
      return (
        <Badge className="bg-emerald-500/10 text-emerald-600">
          {status.label}
        </Badge>
      );

    case "draft":
      return (
        <Badge className="bg-amber-500/10 text-amber-600">{status.label}</Badge>
      );

    case "archived":
      return (
        <Badge className="bg-slate-500/10 text-slate-600">{status.label}</Badge>
      );

    default:
      return <Badge>{status.label}</Badge>;
  }
}

export default PackagesTable;
