export interface ExpiredSubscription {
  id: string;

  client: string;

  packageName: string;

  expiredDate: string;

  daysExpired: number;

  revenue: string;

  workspaceStatus: string;

  status: string;

  email: string;
}
