function IncludedModulesCard() {
  const modules = [
    "Core HR",
    "Attendance",
    "Payroll",
    "Recruitment",
    "Performance",
    "Leave Management",
    "Asset Management",
    "Reports & Analytics",
  ];

  return (
    <div className="rounded-[28px] border border-border p-6">
      <h3 className="text-xl font-black">Included Modules</h3>

      <div className="mt-6 flex flex-wrap gap-3">
        {modules.map((module) => (
          <div
            key={module}
            className="rounded-full border border-border px-4 py-2"
          >
            {module}
          </div>
        ))}
      </div>
    </div>
  );
}

export default IncludedModulesCard;
