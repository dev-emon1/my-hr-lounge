import type { LucideIcon } from "lucide-react";

export type NavigationItem = {
  title: string;

  href?: string;

  icon?: LucideIcon;

  children?: NavigationItem[];
};

export type NavigationGroup = {
  title: string;

  items: NavigationItem[];
};
