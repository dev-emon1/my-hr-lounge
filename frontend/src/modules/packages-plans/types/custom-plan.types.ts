export interface CustomPlan {
  id: string;

  clientName: string;

  planName: string;

  monthlyPrice: number;

  status: "Active" | "Pending" | "Expired";
}
