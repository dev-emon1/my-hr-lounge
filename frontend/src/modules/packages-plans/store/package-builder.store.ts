import { create } from "zustand";

import type { PackageBuilderFormValues } from "../types/package-builder.types";

type PackageBuilderStore = {
  packageData: Partial<PackageBuilderFormValues>;

  setPackageData: (data: Partial<PackageBuilderFormValues>) => void;

  clearPackageData: () => void;
};

export const usePackageBuilderStore = create<PackageBuilderStore>((set) => ({
  packageData: {},

  setPackageData: (data) =>
    set((state) => ({
      packageData: {
        ...state.packageData,
        ...data,
      },
    })),

  clearPackageData: () =>
    set({
      packageData: {},
    }),
}));
