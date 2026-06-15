import { useState } from "react";

import { mockAddons } from "../constants/mock-addons";

import type { Addon } from "../types/addon.types";

import AddonsStats from "../components/addons/addons-stats";
import AddonsToolbar from "../components/addons/addons-toolbar";
import AddonsTable from "../components/addons/addons-table";

import CreateAddonDialog from "../components/addons/dialogs/create-addon-dialog";
import EditAddonDialog from "../components/addons/dialogs/edit-addon-dialog";

function AddonsPage() {
  const [selectedAddon, setSelectedAddon] = useState<Addon | null>(null);

  const [createOpen, setCreateOpen] = useState(false);

  const [editOpen, setEditOpen] = useState(false);

  return (
    <>
      <div className="space-y-8">
        <div>
          <h1 className="text-4xl font-black tracking-tight">
            Addons Management
          </h1>

          <p className="mt-2 text-muted-foreground">
            Manage platform addons, addon pricing and client assignments.
          </p>
        </div>

        <AddonsStats addons={mockAddons} />

        <div className="rounded-[32px] border border-border bg-card/60 p-6 shadow-2xl backdrop-blur-xl lg:p-8">
          <div className="mb-8">
            <h2 className="text-2xl font-black">Addon Directory</h2>

            <p className="mt-2 text-muted-foreground">
              Review, manage and monitor platform addons.
            </p>
          </div>

          <AddonsToolbar onCreateAddon={() => setCreateOpen(true)} />

          <div className="mt-8">
            <AddonsTable
              addons={mockAddons}
              onEdit={(addon) => {
                setSelectedAddon(addon);

                setEditOpen(true);
              }}
            />
          </div>
        </div>
      </div>

      <CreateAddonDialog open={createOpen} onOpenChange={setCreateOpen} />

      <EditAddonDialog
        open={editOpen}
        onOpenChange={setEditOpen}
        addon={selectedAddon}
      />
    </>
  );
}

export default AddonsPage;
