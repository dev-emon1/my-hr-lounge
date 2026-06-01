import { useState } from "react";

import { Building2, Globe, Mail, Phone, StickyNote } from "lucide-react";

import {
  Dialog,
  DialogContent,
  DialogDescription,
  DialogFooter,
  DialogHeader,
  DialogTitle,
} from "@/shared/ui/dialog";

import { Button } from "@/shared/ui/button";

import { Input } from "@/shared/ui/input";

import { Label } from "@/shared/ui/label";

import { Textarea } from "@/shared/ui/textarea";

import {
  Select,
  SelectContent,
  SelectItem,
  SelectTrigger,
  SelectValue,
} from "@/shared/ui/select";

type Props = {
  open: boolean;

  onOpenChange: (open: boolean) => void;
};

function EditClientModal({ open, onOpenChange }: Props) {
  const [formData, setFormData] = useState({
    companyName: "Acme Corporation",

    email: "admin@acme.com",

    phone: "+8801712345678",

    workspaceName: "Acme HR",

    workspaceSlug: "acme-hr",

    status: "active",

    notes: "Enterprise customer with annual subscription.",
  });

  const updateField = (field: string, value: string) => {
    setFormData((prev) => ({
      ...prev,

      [field]: value,
    }));
  };

  return (
    <Dialog open={open} onOpenChange={onOpenChange}>
      <DialogContent className="max-h-[90vh] overflow-y-auto">
        <DialogHeader>
          <DialogTitle>Edit Client</DialogTitle>

          <DialogDescription>
            Update client information, workspace settings and account status.
          </DialogDescription>
        </DialogHeader>

        <div className="space-y-6 p-6">
          {/* COMPANY */}

          <div className="rounded-[24px] border border-border p-6">
            <div className="mb-5 flex items-center gap-3">
              <Building2 size={18} className="text-primary" />

              <h3 className="font-bold">Company Information</h3>
            </div>

            <div className="grid gap-5 md:grid-cols-2">
              <div className="space-y-2">
                <Label>Company Name</Label>

                <Input
                  value={formData.companyName}
                  onChange={(e) => updateField("companyName", e.target.value)}
                />
              </div>

              <div className="space-y-2">
                <Label>Email</Label>

                <Input
                  value={formData.email}
                  onChange={(e) => updateField("email", e.target.value)}
                />
              </div>

              <div className="space-y-2 md:col-span-2">
                <Label>Phone</Label>

                <Input
                  value={formData.phone}
                  onChange={(e) => updateField("phone", e.target.value)}
                />
              </div>
            </div>
          </div>

          {/* WORKSPACE */}

          <div className="rounded-[24px] border border-border p-6">
            <div className="mb-5 flex items-center gap-3">
              <Globe size={18} className="text-primary" />

              <h3 className="font-bold">Workspace Information</h3>
            </div>

            <div className="grid gap-5 md:grid-cols-2">
              <div className="space-y-2">
                <Label>Workspace Name</Label>

                <Input
                  value={formData.workspaceName}
                  onChange={(e) => updateField("workspaceName", e.target.value)}
                />
              </div>

              <div className="space-y-2">
                <Label>Workspace Slug</Label>

                <Input
                  value={formData.workspaceSlug}
                  onChange={(e) => updateField("workspaceSlug", e.target.value)}
                />
              </div>
            </div>
          </div>

          {/* STATUS */}

          <div className="rounded-[24px] border border-border p-6">
            <div className="mb-5 flex items-center gap-3">
              <Mail size={18} className="text-primary" />

              <h3 className="font-bold">Status Management</h3>
            </div>

            <div className="space-y-2">
              <Label>Status</Label>

              <Select
                value={formData.status}
                onValueChange={(value) => updateField("status", value)}
              >
                <SelectTrigger>
                  <SelectValue />
                </SelectTrigger>

                <SelectContent>
                  <SelectItem value="active">Active</SelectItem>

                  <SelectItem value="trial">Trial</SelectItem>

                  <SelectItem value="suspended">Suspended</SelectItem>
                </SelectContent>
              </Select>
            </div>
          </div>

          {/* NOTES */}

          <div className="rounded-[24px] border border-border p-6">
            <div className="mb-5 flex items-center gap-3">
              <StickyNote size={18} className="text-primary" />

              <h3 className="font-bold">Internal Notes</h3>
            </div>

            <Textarea
              rows={5}
              value={formData.notes}
              onChange={(e) => updateField("notes", e.target.value)}
            />
          </div>
        </div>

        <DialogFooter>
          <Button variant="outline" onClick={() => onOpenChange(false)}>
            Cancel
          </Button>

          <Button>Save Changes</Button>
        </DialogFooter>
      </DialogContent>
    </Dialog>
  );
}

export default EditClientModal;
