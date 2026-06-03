import { Download, Search } from "lucide-react";

import { Button } from "@/shared/ui/button";

import { Input } from "@/shared/ui/input";

import {
  Select,
  SelectContent,
  SelectItem,
  SelectTrigger,
  SelectValue,
} from "@/shared/ui/select";

function PackageAssignmentToolbar() {
  return (
    <div className="flex flex-col gap-4 xl:flex-row xl:items-center xl:justify-between">
      <div className="flex flex-1 flex-col gap-4 lg:flex-row">
        <div className="relative w-full xl:max-w-md">
          <Search
            size={18}
            className="absolute left-4 top-1/2 -translate-y-1/2 text-muted-foreground"
          />

          <Input
            placeholder="Search client..."
            className="h-12 rounded-2xl pl-11"
          />
        </div>

        <Select>
          <SelectTrigger className="h-12 w-full rounded-2xl lg:w-[220px]">
            <SelectValue placeholder="Package" />
          </SelectTrigger>

          <SelectContent>
            <SelectItem value="starter">Starter</SelectItem>

            <SelectItem value="growth">Growth</SelectItem>

            <SelectItem value="enterprise">Enterprise</SelectItem>

            <SelectItem value="custom">Custom</SelectItem>
          </SelectContent>
        </Select>

        <Select>
          <SelectTrigger className="h-12 w-full rounded-2xl lg:w-[220px]">
            <SelectValue placeholder="Billing Cycle" />
          </SelectTrigger>

          <SelectContent>
            <SelectItem value="monthly">Monthly</SelectItem>

            <SelectItem value="quarterly">Quarterly</SelectItem>

            <SelectItem value="yearly">Yearly</SelectItem>
          </SelectContent>
        </Select>
      </div>

      <Button variant="outline" className="h-12 rounded-2xl">
        <Download size={18} />
        Export
      </Button>
    </div>
  );
}

export default PackageAssignmentToolbar;
