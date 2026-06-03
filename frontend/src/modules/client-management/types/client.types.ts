export type ClientStatus = "active" | "trial" | "suspended" | "inactive";

export type Client = {
  id: string;

  companyName: string;

  slug: string;

  email: string;

  phone: string;

  packageName: string;

  employees: number;

  storageUsed: string;

  status: ClientStatus;

  createdAt: string;
};

export interface EditClientFormData {
  companyName: string;

  email: string;

  phone: string;

  workspaceName: string;

  workspaceSlug: string;

  status: "active" | "suspended" | "trial";

  notes: string;
}
