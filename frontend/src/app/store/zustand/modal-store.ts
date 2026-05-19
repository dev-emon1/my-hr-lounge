import { create } from "zustand";

type ModalStore = {
  createCompanyOpen: boolean;

  setCreateCompanyOpen: (open: boolean) => void;
};

export const useModalStore = create<ModalStore>((set) => ({
  createCompanyOpen: false,

  setCreateCompanyOpen: (open) =>
    set({
      createCompanyOpen: open,
    }),
}));
