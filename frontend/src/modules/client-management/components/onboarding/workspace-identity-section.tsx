import { useState } from "react";

import {
  Globe,
  ImagePlus,
  Languages,
  MonitorSmartphone,
  Palette,
} from "lucide-react";

import { Input } from "@/shared/ui/input";
import { Label } from "@/shared/ui/label";

const themeOptions = [
  {
    id: "blue",
    color: "bg-blue-500",
  },

  {
    id: "green",
    color: "bg-green-500",
  },

  {
    id: "purple",
    color: "bg-violet-500",
  },

  {
    id: "orange",
    color: "bg-orange-500",
  },

  {
    id: "red",
    color: "bg-red-500",
  },
];

function WorkspaceIdentitySection() {
  const [workspaceName, setWorkspaceName] = useState("");

  const [workspaceSlug, setWorkspaceSlug] = useState("");

  const [themeColor, setThemeColor] = useState("blue");

  const workspaceUrl = workspaceSlug
    ? `https://${workspaceSlug}.hrm.com`
    : "https://your-workspace.hrm.com";

  return (
    <div className="overflow-hidden rounded-[28px] border border-border bg-card shadow-xl">
      {/* HEADER */}
      <div className="border-b border-border bg-gradient-to-r from-violet-500/10 to-transparent p-6 lg:p-8">
        <div>
          <div className="inline-flex items-center gap-2 rounded-full border border-violet-500/20 bg-violet-500/10 px-4 py-2 text-sm font-semibold text-violet-500">
            <MonitorSmartphone size={16} />
            Workspace Identity
          </div>

          <h2 className="mt-4 text-3xl font-black tracking-tight">
            Configure Workspace Identity
          </h2>

          <p className="mt-3 max-w-2xl leading-7 text-muted-foreground">
            Configure workspace branding, URL structure, localization settings,
            and visual identity.
          </p>
        </div>
      </div>

      {/* BODY */}
      <div className="grid gap-8 p-6 xl:grid-cols-[minmax(0,1fr)_380px] lg:p-8">
        {/* LEFT */}
        <div className="space-y-8">
          {/* WORKSPACE INFO */}
          <div>
            <h3 className="text-xl font-black">Workspace Information</h3>

            <p className="mt-2 text-sm text-muted-foreground">
              Configure workspace name and URL.
            </p>

            <div className="mt-6 grid gap-6">
              <div className="space-y-3">
                <Label>Workspace Name</Label>

                <Input
                  value={workspaceName}
                  onChange={(e) => setWorkspaceName(e.target.value)}
                  placeholder="ABC HR Workspace"
                  className="h-12"
                />
              </div>

              <div className="space-y-3">
                <Label>Workspace Slug</Label>

                <Input
                  value={workspaceSlug}
                  onChange={(e) =>
                    setWorkspaceSlug(
                      e.target.value.toLowerCase().replace(/\s+/g, "-"),
                    )
                  }
                  placeholder="abc-workspace"
                  className="h-12"
                />
              </div>

              <div className="rounded-2xl border border-primary/20 bg-primary/5 p-4">
                <div className="flex items-center gap-3">
                  <Globe size={18} className="text-primary" />

                  <div>
                    <p className="text-xs uppercase tracking-wider text-muted-foreground">
                      Workspace URL
                    </p>

                    <p className="mt-1 font-semibold text-primary">
                      {workspaceUrl}
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          {/* BRANDING */}
          <div>
            <h3 className="text-xl font-black">Branding Assets</h3>

            <p className="mt-2 text-sm text-muted-foreground">
              Upload organization branding files.
            </p>

            <div className="mt-6 grid gap-6 md:grid-cols-2">
              <div className="rounded-[28px] border border-dashed border-border p-8 transition-colors hover:border-primary">
                <div className="flex flex-col items-center justify-center text-center">
                  <div className="flex h-14 w-14 items-center justify-center rounded-2xl bg-primary/10 text-primary">
                    <ImagePlus size={24} />
                  </div>

                  <h4 className="mt-4 font-bold">Upload Logo</h4>

                  <p className="mt-2 text-sm text-muted-foreground">
                    PNG, SVG, JPG
                  </p>
                </div>
              </div>

              <div className="rounded-[28px] border border-dashed border-border p-8 transition-colors hover:border-violet-500">
                <div className="flex flex-col items-center justify-center text-center">
                  <div className="flex h-14 w-14 items-center justify-center rounded-2xl bg-violet-500/10 text-violet-500">
                    <ImagePlus size={24} />
                  </div>

                  <h4 className="mt-4 font-bold">Upload Favicon</h4>

                  <p className="mt-2 text-sm text-muted-foreground">
                    32x32 PNG
                  </p>
                </div>
              </div>
            </div>
          </div>

          {/* APPEARANCE */}
          <div>
            <h3 className="text-xl font-black">Appearance</h3>

            <p className="mt-2 text-sm text-muted-foreground">
              Customize workspace branding colors.
            </p>

            <div className="mt-6">
              <Label>Theme Color</Label>

              <div className="mt-4 flex flex-wrap gap-4">
                {themeOptions.map((theme) => (
                  <button
                    key={theme.id}
                    type="button"
                    onClick={() => setThemeColor(theme.id)}
                    className={`h-12 w-12 rounded-2xl border-4 transition-all ${
                      themeColor === theme.id
                        ? "scale-110 border-primary"
                        : "border-transparent"
                    }`}
                  >
                    <div
                      className={`h-full w-full rounded-xl ${theme.color}`}
                    />
                  </button>
                ))}
              </div>
            </div>
          </div>

          {/* LOCALIZATION */}
          <div>
            <h3 className="text-xl font-black">Localization</h3>

            <p className="mt-2 text-sm text-muted-foreground">
              Regional and language preferences.
            </p>

            <div className="mt-6 grid gap-6 md:grid-cols-3">
              <div className="space-y-3">
                <Label>Language</Label>

                <Input placeholder="English" className="h-12" />
              </div>

              <div className="space-y-3">
                <Label>Date Format</Label>

                <Input placeholder="DD/MM/YYYY" className="h-12" />
              </div>

              <div className="space-y-3">
                <Label>Time Format</Label>

                <Input placeholder="24 Hours" className="h-12" />
              </div>
            </div>
          </div>
        </div>

        {/* RIGHT */}
        <div>
          <div className="sticky top-6 rounded-[28px] border border-border bg-background p-6 shadow-lg">
            <div className="flex items-center gap-3">
              <Palette size={18} className="text-primary" />

              <h3 className="font-black">Workspace Preview</h3>
            </div>

            <div className="mt-6 rounded-[24px] border border-border bg-card p-5">
              <div className="flex items-center gap-3">
                <div
                  className={`h-10 w-10 rounded-2xl ${
                    themeOptions.find((item) => item.id === themeColor)?.color
                  }`}
                />

                <div>
                  <h4 className="font-bold">
                    {workspaceName || "Workspace Name"}
                  </h4>

                  <p className="text-xs text-muted-foreground">
                    Active Workspace
                  </p>
                </div>
              </div>

              <div className="mt-6 space-y-4">
                <div>
                  <p className="text-xs uppercase text-muted-foreground">URL</p>

                  <p className="font-medium">{workspaceUrl}</p>
                </div>

                <div>
                  <p className="text-xs uppercase text-muted-foreground">
                    Language
                  </p>

                  <p className="font-medium">English</p>
                </div>

                <div>
                  <p className="text-xs uppercase text-muted-foreground">
                    Status
                  </p>

                  <p className="font-medium text-green-500">Ready</p>
                </div>
              </div>
            </div>

            <div className="mt-6 rounded-2xl border border-primary/20 bg-primary/5 p-4">
              <div className="flex items-start gap-3">
                <Languages size={18} className="mt-0.5 text-primary" />

                <div>
                  <h4 className="font-semibold">Workspace Preview</h4>

                  <p className="mt-1 text-sm text-muted-foreground">
                    Branding and localization settings will be reflected
                    throughout the client workspace.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  );
}

export default WorkspaceIdentitySection;
