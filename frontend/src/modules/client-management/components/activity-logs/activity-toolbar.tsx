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

function ActivityToolbar() {
  return (
    <div className="flex flex-col gap-4 xl:flex-row xl:items-center xl:justify-between">
      <div className="flex flex-1 flex-col gap-4 lg:flex-row">
        <div className="relative w-full xl:max-w-md">
          <Search
            size={18}
            className="absolute left-4 top-1/2 -translate-y-1/2 text-muted-foreground"
          />

          <Input
            placeholder="Search activities..."
            className="h-12 rounded-2xl pl-11"
          />
        </div>

        <Select>
          <SelectTrigger className="h-12 w-full rounded-2xl lg:w-[220px]">
            <SelectValue placeholder="Client" />
          </SelectTrigger>

          <SelectContent>
            <SelectItem value="all">All Clients</SelectItem>

            <SelectItem value="acme">Acme Corporation</SelectItem>

            <SelectItem value="nextgen">NextGen Solutions</SelectItem>
          </SelectContent>
        </Select>

        <Select>
          <SelectTrigger className="h-12 w-full rounded-2xl lg:w-[220px]">
            <SelectValue placeholder="Activity Type" />
          </SelectTrigger>

          <SelectContent>
            <SelectItem value="login">Login</SelectItem>

            <SelectItem value="employee">Employee Management</SelectItem>

            <SelectItem value="payroll">Payroll</SelectItem>

            <SelectItem value="settings">Settings</SelectItem>
          </SelectContent>
        </Select>

        <Select>
          <SelectTrigger className="h-12 w-full rounded-2xl lg:w-[180px]">
            <SelectValue placeholder="Status" />
          </SelectTrigger>

          <SelectContent>
            <SelectItem value="success">Success</SelectItem>

            <SelectItem value="failed">Failed</SelectItem>
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

export default ActivityToolbar;
