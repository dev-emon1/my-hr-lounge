import {
  Building2,
  Briefcase,
  Globe2,
  Mail,
  MapPin,
  Phone,
  Users,
} from "lucide-react";

import { Input } from "@/shared/ui/input";
import { Label } from "@/shared/ui/label";
import {
  Select,
  SelectContent,
  SelectItem,
  SelectTrigger,
  SelectValue,
} from "@/shared/ui/select";
import { Textarea } from "@/shared/ui/textarea";

function ClientInformationSection() {
  return (
    <div className="overflow-hidden rounded-[28px] border border-border bg-card shadow-xl">
      {/* HEADER */}
      <div className="border-b border-border bg-linear-to-r from-primary/10 to-transparent p-6 lg:p-8">
        <div className="flex items-start justify-between gap-6">
          <div>
            <div className="inline-flex items-center gap-2 rounded-full border border-primary/20 bg-primary/10 px-4 py-2 text-sm font-semibold text-primary">
              <Building2 size={16} />
              Client Identity
            </div>

            <h2 className="mt-4 text-3xl font-black tracking-tight">
              Client Information
            </h2>

            <p className="mt-3 max-w-2xl leading-7 text-muted-foreground">
              Configure the organization profile, business information, industry
              type, and primary contact details.
            </p>
          </div>
        </div>
      </div>

      {/* BODY */}
      <div className="space-y-8 p-6 lg:p-8">
        {/* COMPANY INFO */}
        <div>
          <h3 className="text-xl font-black">Organization Details</h3>

          <p className="mt-2 text-sm text-muted-foreground">
            Basic business identity information.
          </p>

          <div className="mt-6 grid gap-6 lg:grid-cols-2">
            {/* COMPANY NAME */}
            <div className="space-y-3">
              <Label>Company Name</Label>

              <div className="relative">
                <Building2
                  size={18}
                  className="absolute left-4 top-1/2 -translate-y-1/2 text-muted-foreground"
                />

                <Input
                  placeholder="ABC Corporation Ltd."
                  className="h-12 pl-11"
                />
              </div>
            </div>

            {/* CLIENT TYPE */}
            <div className="space-y-3">
              <Label>Client Type</Label>

              <Select>
                <SelectTrigger>
                  <SelectValue placeholder="Select Client Type" />
                </SelectTrigger>

                <SelectContent>
                  <SelectItem value="production">Production</SelectItem>

                  <SelectItem value="trial">Trial</SelectItem>

                  <SelectItem value="demo">Demo</SelectItem>

                  <SelectItem value="internal">Internal Testing</SelectItem>
                </SelectContent>
              </Select>
            </div>

            {/* INDUSTRY */}
            <div className="space-y-3">
              <Label>Industry</Label>

              <div className="relative">
                <Briefcase
                  size={18}
                  className="absolute left-4 top-1/2 -translate-y-1/2 text-muted-foreground"
                />

                <Input placeholder="Software Company" className="h-12 pl-11" />
              </div>
            </div>

            {/* COMPANY SIZE */}
            <div className="space-y-3">
              <Label>Company Size</Label>

              <div className="relative">
                <Users
                  size={18}
                  className="absolute left-4 top-1/2 -translate-y-1/2 text-muted-foreground"
                />

                <Input placeholder="500 Employees" className="h-12 pl-11" />
              </div>
            </div>
          </div>
        </div>

        {/* CONTACT INFO */}
        <div>
          <h3 className="text-xl font-black">Contact Information</h3>

          <p className="mt-2 text-sm text-muted-foreground">
            Primary communication channels.
          </p>

          <div className="mt-6 grid gap-6 lg:grid-cols-2">
            {/* EMAIL */}
            <div className="space-y-3">
              <Label>Business Email</Label>

              <div className="relative">
                <Mail
                  size={18}
                  className="absolute left-4 top-1/2 -translate-y-1/2 text-muted-foreground"
                />

                <Input
                  type="email"
                  placeholder="contact@company.com"
                  className="h-12 pl-11"
                />
              </div>
            </div>

            {/* PHONE */}
            <div className="space-y-3">
              <Label>Business Phone</Label>

              <div className="relative">
                <Phone
                  size={18}
                  className="absolute left-4 top-1/2 -translate-y-1/2 text-muted-foreground"
                />

                <Input placeholder="+8801712345678" className="h-12 pl-11" />
              </div>
            </div>
          </div>
        </div>

        {/* LOCATION */}
        <div>
          <h3 className="text-xl font-black">Location Settings</h3>

          <p className="mt-2 text-sm text-muted-foreground">
            Configure regional and localization preferences.
          </p>

          <div className="mt-6 grid gap-6 lg:grid-cols-3">
            {/* COUNTRY */}
            <div className="space-y-3">
              <Label>Country</Label>
              <Select>
                <SelectTrigger>
                  <SelectValue placeholder="Select Country" />
                </SelectTrigger>

                <SelectContent>
                  <SelectItem value="bd">Bangladesh</SelectItem>

                  <SelectItem value="in">India</SelectItem>

                  <SelectItem value="us">United States</SelectItem>
                </SelectContent>
              </Select>
            </div>

            {/* TIMEZONE */}
            <div className="space-y-3">
              <Label>Timezone</Label>

              <div className="relative">
                <Globe2
                  size={18}
                  className="absolute left-4 top-1/2 -translate-y-1/2 text-muted-foreground"
                />

                <Input placeholder="Asia/Dhaka" className="h-12 pl-11" />
              </div>
            </div>

            {/* CURRENCY */}
            <div className="space-y-3">
              <Label>Currency</Label>

              <Select>
                <SelectTrigger>
                  <SelectValue placeholder="Select Currency" />
                </SelectTrigger>

                <SelectContent>
                  <SelectItem value="bdt">BDT</SelectItem>

                  <SelectItem value="usd">USD</SelectItem>

                  <SelectItem value="inr">INR</SelectItem>
                </SelectContent>
              </Select>
            </div>
          </div>
        </div>

        {/* ADDRESS */}
        <div>
          <h3 className="text-xl font-black">Company Address</h3>

          <p className="mt-2 text-sm text-muted-foreground">
            Registered office or headquarters address.
          </p>

          <div className="mt-6">
            <div className="relative">
              <MapPin
                size={18}
                className="absolute left-4 top-4 text-muted-foreground"
              />

              <Textarea
                placeholder="House, Road, Area, City, Country"
                className="min-h-[120px] pl-11"
              />
            </div>
          </div>
        </div>
      </div>
    </div>
  );
}

export default ClientInformationSection;
