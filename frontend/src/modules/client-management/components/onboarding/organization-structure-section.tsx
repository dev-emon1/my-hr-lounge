import { Building2, Globe2, Network, Scale, Users2 } from "lucide-react";

import { Input } from "@/shared/ui/input";
import { Label } from "@/shared/ui/label";

import {
  Select,
  SelectContent,
  SelectItem,
  SelectTrigger,
  SelectValue,
} from "@/shared/ui/select";

function OrganizationStructureSection() {
  return (
    <div className="overflow-hidden rounded-[28px] border border-border bg-card shadow-xl">
      {/* HEADER */}
      <div className="border-b border-border bg-gradient-to-r from-cyan-500/10 to-transparent p-6 lg:p-8">
        <div>
          <div className="inline-flex items-center gap-2 rounded-full border border-cyan-500/20 bg-cyan-500/10 px-4 py-2 text-sm font-semibold text-cyan-600">
            <Network size={16} />
            Organization Structure
          </div>

          <h2 className="mt-4 text-3xl font-black tracking-tight">
            Configure Organization Structure
          </h2>

          <p className="mt-3 max-w-3xl leading-7 text-muted-foreground">
            Define how the organization is structured, governed, and managed
            across business units, regions, and reporting hierarchies.
          </p>
        </div>
      </div>

      {/* BODY */}
      <div className="grid gap-8 p-6 xl:grid-cols-[minmax(0,1fr)_380px] lg:p-8">
        {/* LEFT */}
        <div className="space-y-8">
          {/* BUSINESS STRUCTURE */}
          <div className="rounded-[28px] border border-border p-6">
            <h3 className="text-xl font-black">Business Structure</h3>

            <div className="mt-8 grid gap-6 md:grid-cols-2">
              <div className="space-y-3">
                <Label>Business Type</Label>

                <Select>
                  <SelectTrigger>
                    <SelectValue placeholder="Select Business Type" />
                  </SelectTrigger>

                  <SelectContent>
                    <SelectItem value="private">Private Company</SelectItem>

                    <SelectItem value="public">Public Company</SelectItem>

                    <SelectItem value="government">Government</SelectItem>

                    <SelectItem value="ngo">NGO</SelectItem>

                    <SelectItem value="group">Group of Companies</SelectItem>
                  </SelectContent>
                </Select>
              </div>

              <div className="space-y-3">
                <Label>Legal Structure</Label>

                <Select>
                  <SelectTrigger>
                    <SelectValue placeholder="Select Legal Structure" />
                  </SelectTrigger>

                  <SelectContent>
                    <SelectItem value="llc">LLC</SelectItem>

                    <SelectItem value="ltd">Limited Company</SelectItem>

                    <SelectItem value="corporation">Corporation</SelectItem>

                    <SelectItem value="partnership">Partnership</SelectItem>
                  </SelectContent>
                </Select>
              </div>
            </div>
          </div>

          {/* HEAD OFFICE */}
          <div className="rounded-[28px] border border-border p-6">
            <h3 className="text-xl font-black">Head Office</h3>

            <div className="mt-8 grid gap-6 md:grid-cols-2">
              <div className="space-y-3">
                <Label>Headquarters Name</Label>

                <div className="relative">
                  <Building2
                    size={18}
                    className="absolute left-4 top-1/2 -translate-y-1/2 text-muted-foreground"
                  />

                  <Input className="h-12 pl-11" placeholder="Corporate HQ" />
                </div>
              </div>

              <div className="space-y-3">
                <Label>Country</Label>

                <div className="relative">
                  <Globe2
                    size={18}
                    className="absolute left-4 top-1/2 -translate-y-1/2 text-muted-foreground"
                  />

                  <Input className="h-12 pl-11" placeholder="Bangladesh" />
                </div>
              </div>
            </div>
          </div>

          {/* ORGANIZATION MODEL */}
          <div className="rounded-[28px] border border-border p-6">
            <h3 className="text-xl font-black">Organization Model</h3>

            <div className="mt-8 grid gap-4">
              <div className="rounded-2xl border border-border p-5">
                <h4 className="font-bold">Single Entity</h4>

                <p className="mt-2 text-sm text-muted-foreground">
                  One company operating under a single legal structure.
                </p>
              </div>

              <div className="rounded-2xl border border-primary bg-primary/5 p-5">
                <h4 className="font-bold">Multi Entity</h4>

                <p className="mt-2 text-sm text-muted-foreground">
                  Multiple business units, subsidiaries, or companies.
                </p>
              </div>

              <div className="rounded-2xl border border-border p-5">
                <h4 className="font-bold">Group Structure</h4>

                <p className="mt-2 text-sm text-muted-foreground">
                  Parent-child organizational hierarchy.
                </p>
              </div>
            </div>
          </div>

          {/* REPORTING */}
          <div className="rounded-[28px] border border-border p-6">
            <h3 className="text-xl font-black">Reporting Structure</h3>

            <div className="mt-8 grid gap-6 md:grid-cols-2">
              <div className="space-y-3">
                <Label>Hierarchy Levels</Label>

                <Input type="number" placeholder="5" className="h-12" />
              </div>

              <div className="space-y-3">
                <Label>Approval Layers</Label>

                <Input type="number" placeholder="3" className="h-12" />
              </div>
            </div>
          </div>
        </div>

        {/* RIGHT */}
        <div>
          <div className="sticky top-6 space-y-6">
            <div className="rounded-[28px] border border-border bg-card p-6 shadow-lg">
              <h3 className="text-xl font-black">Structure Summary</h3>

              <div className="mt-6 space-y-5">
                <div className="flex items-center gap-3">
                  <Scale size={18} className="text-primary" />

                  <span>Enterprise Governance</span>
                </div>

                <div className="flex items-center gap-3">
                  <Users2 size={18} className="text-primary" />

                  <span>Workforce Hierarchy</span>
                </div>

                <div className="flex items-center gap-3">
                  <Network size={18} className="text-primary" />

                  <span>Multi-Level Reporting</span>
                </div>
              </div>
            </div>

            <div className="rounded-[28px] border border-primary/20 bg-primary/5 p-6">
              <h4 className="font-bold text-primary">
                Enterprise Recommendation
              </h4>

              <p className="mt-3 text-sm leading-7 text-muted-foreground">
                For organizations with multiple departments, branches, and
                management layers, use Multi Entity or Group Structure for
                maximum scalability.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  );
}

export default OrganizationStructureSection;
