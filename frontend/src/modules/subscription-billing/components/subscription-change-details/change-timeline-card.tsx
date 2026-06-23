import type { SubscriptionChange } from "../../types/subscription-change.types";

type Props = {
  change: SubscriptionChange;
};

function ChangeTimelineCard({ change }: Props) {
  return (
    <div className="rounded-[28px] border border-border p-6">
      <h3 className="text-xl font-black">Timeline</h3>

      <div className="mt-6 space-y-5">
        <TimelineItem title="Request Submitted" date={change.requestedAt} />

        {change.approvedAt && (
          <TimelineItem title="Request Approved" date={change.approvedAt} />
        )}

        {change.completedAt && (
          <TimelineItem title="Change Completed" date={change.completedAt} />
        )}
      </div>
    </div>
  );
}

function TimelineItem({ title, date }: { title: string; date: string }) {
  return (
    <div className="border-l-2 border-border pl-4">
      <p className="font-medium">{title}</p>

      <p className="text-sm text-muted-foreground">{date}</p>
    </div>
  );
}

export default ChangeTimelineCard;
