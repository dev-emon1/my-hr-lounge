import { create } from "zustand";
import { QuotationFormValues } from "../types/quotation-form.types";

type QuotationStore = {
  quotation: Partial<QuotationFormValues>;

  setQuotation: (data: Partial<QuotationFormValues>) => void;

  clearQuotation: () => void;
};

export const useQuotationStore = create<QuotationStore>((set) => ({
  quotation: {},

  setQuotation: (data) =>
    set((state) => ({ quotation: { ...state.quotation, ...data } })),

  clearQuotation: () => set({ quotation: {} }),
}));
