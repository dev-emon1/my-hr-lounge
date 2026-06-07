import { Tabs, TabsContent, TabsList, TabsTrigger } from "@/shared/ui/tabs";

import OverviewTab from "./overview-tab";

import SubscriptionTab from "./subscription-tab";

import UsageTab from "./usage-tab";

import ActivityTab from "./activity-tab";
import NotesTab from "./notes-tab";
import DocumentsTab from "./documents-tab";
import TimelineTab from "./timeline-tab";

function ClientDetailsTabs() {
  return (
    <Tabs defaultValue="overview" className="space-y-6">
      <TabsList className="h-auto flex-wrap rounded-2xl p-2">
        <TabsTrigger value="overview">Overview</TabsTrigger>

        <TabsTrigger value="subscription">Subscription</TabsTrigger>

        <TabsTrigger value="usage">Usage</TabsTrigger>

        <TabsTrigger value="activity">Activity</TabsTrigger>

        <TabsTrigger value="notes">Notes</TabsTrigger>

        <TabsTrigger value="documents">Documents</TabsTrigger>

        <TabsTrigger value="timeline">Timeline</TabsTrigger>
      </TabsList>

      <TabsContent value="overview">
        <OverviewTab />
      </TabsContent>

      <TabsContent value="subscription">
        <SubscriptionTab />
      </TabsContent>

      <TabsContent value="usage">
        <UsageTab />
      </TabsContent>

      <TabsContent value="activity">
        <ActivityTab />
      </TabsContent>

      <TabsContent value="notes">
        <NotesTab />
      </TabsContent>

      <TabsContent value="documents">
        <DocumentsTab />
      </TabsContent>

      <TabsContent value="timeline">
        <TimelineTab />
      </TabsContent>
    </Tabs>
  );
}

export default ClientDetailsTabs;
