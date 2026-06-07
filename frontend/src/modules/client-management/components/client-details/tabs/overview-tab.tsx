import WorkspaceInformationCard from "../workspace-information-card";

import WorkspaceOwnerCard from "../workspace-owner-card";

function OverviewTab() {
  return (
    <div className="space-y-8">
      <WorkspaceInformationCard />

      <WorkspaceOwnerCard />
    </div>
  );
}

export default OverviewTab;
