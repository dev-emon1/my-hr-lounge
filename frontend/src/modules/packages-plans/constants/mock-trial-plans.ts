import type { TrialPlan } from "../types/trial-plan.types";

import { mockTrialModules } from "./mock-trial-modules";

export const mockTrialPlans: TrialPlan[] = [
  {
    id: "1",

    trialCode: "TP-001",

    trialName: "Starter Trial",

    description: "Starter trial plan for small organizations.",

    durationDays: 14,

    employeeLimit: 25,

    modules: mockTrialModules,

    status: "Active",

    createdAt: "2026-01-01",

    updatedAt: "2026-01-01",
  },

  {
    id: "2",

    trialCode: "TP-002",

    trialName: "Growth Trial",

    description: "Growth trial plan for medium businesses.",

    durationDays: 30,

    employeeLimit: 100,

    modules: mockTrialModules,

    status: "Active",

    createdAt: "2026-01-01",

    updatedAt: "2026-01-01",
  },
];
