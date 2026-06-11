import { Quotation } from "../../types/quotation.types";

type Props = {
  quotation: Quotation;
};

function ApprovalTimelineCard({ quotation }: Props) {
  return (
    <div className="rounded-[28px] border border-border p-6">
      <h3 className="text-xl font-black">Approval Timeline</h3>

      <div className="mt-6 space-y-5">
        {quotation.timeline?.map((item) => (
          <div key={item.id} className="border-l-2 border-border pl-4">
            <p className="font-medium">{item.title}</p>

            <p className="mt-1 text-sm text-muted-foreground">{item.date}</p>
          </div>
        ))}
      </div>
    </div>
  );
}

export default ApprovalTimelineCard;
