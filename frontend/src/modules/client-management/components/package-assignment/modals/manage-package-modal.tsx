import {
  Dialog,
  DialogContent,
  DialogDescription,
  DialogHeader,
  DialogTitle,
} from "@/shared/ui/dialog";

import { Tabs, TabsContent, TabsList, TabsTrigger } from "@/shared/ui/tabs";
import PackageOverviewTab from "../tabs/package-overview-tab";
import PackageSelectionTab from "../tabs/package-selection-tab";
import PackageBillingTab from "../tabs/package-billing-tab";
import PackageOverridesTab from "../tabs/package-overrides-tab";
import PackageHistoryTab from "../tabs/package-history-tab";

type Props = {
  open: boolean;

  onOpenChange: (open: boolean) => void;
};

function ManagePackageModal({ open, onOpenChange }: Props) {
  return (
    <Dialog open={open} onOpenChange={onOpenChange}>
      <DialogContent className="max-w-6xl">
        <DialogHeader>
          <DialogTitle>Manage Package</DialogTitle>

          <DialogDescription>
            Manage package assignment, billing configuration, overrides and
            history.
          </DialogDescription>
        </DialogHeader>

        <div className="p-6">
          <Tabs defaultValue="overview">
            <TabsList>
              <TabsTrigger value="overview">Overview</TabsTrigger>

              <TabsTrigger value="package">Package</TabsTrigger>

              <TabsTrigger value="billing">Billing</TabsTrigger>

              <TabsTrigger value="overrides">Overrides</TabsTrigger>

              <TabsTrigger value="history">History</TabsTrigger>
            </TabsList>

            <TabsContent value="overview">
              <PackageOverviewTab />
            </TabsContent>

            <TabsContent value="package">
              <PackageSelectionTab />
            </TabsContent>

            <TabsContent value="billing">
              <PackageBillingTab />
            </TabsContent>

            <TabsContent value="overrides">
              <PackageOverridesTab />
            </TabsContent>

            <TabsContent value="history">
              <PackageHistoryTab />
            </TabsContent>
          </Tabs>
        </div>
      </DialogContent>
    </Dialog>
  );
}

export default ManagePackageModal;
