type Props = {
  status: "Active" | "Inactive";
};

function TrialPlanStatusBadge({ status }: Props) {
  const isActive = status === "Active";

  return (
    <span
      className={`
        inline-flex items-center rounded-full px-3 py-1 text-xs font-semibold
        ${
          isActive
            ? "bg-emerald-100 text-emerald-700"
            : "bg-slate-100 text-slate-600"
        }
      `}
    >
      {status}
    </span>
  );
}

export default TrialPlanStatusBadge;
