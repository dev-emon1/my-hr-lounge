import {
  Building2,
  HardDrive,
  ShieldCheck,
  Users,
  Briefcase,
  UserCog,
} from "lucide-react";

import UsageProgressCard from "./usage-progress-card";

function ResourceUsageCards() {
  return (
    <div className="grid gap-5 md:grid-cols-2 xl:grid-cols-3">
      <UsageProgressCard
        title="Employees"
        used={420}
        limit={500}
        icon={<Users size={22} />}
      />

      <UsageProgressCard
        title="Admins"
        used={8}
        limit={20}
        icon={<ShieldCheck size={22} />}
      />

      <UsageProgressCard
        title="Branches"
        used={4}
        limit={10}
        icon={<Building2 size={22} />}
      />

      <UsageProgressCard
        title="Departments"
        used={35}
        limit={100}
        icon={<Briefcase size={22} />}
      />

      <UsageProgressCard
        title="Designations"
        used={58}
        limit={200}
        icon={<UserCog size={22} />}
      />

      <UsageProgressCard
        title="Storage"
        used={18}
        limit={50}
        icon={<HardDrive size={22} />}
      />
    </div>
  );
}

export default ResourceUsageCards;
