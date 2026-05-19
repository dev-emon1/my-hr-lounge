import type { ReactNode } from "react";

import { Provider } from "react-redux";

import { store } from "@/app/store/redux/store";
import ThemeProvider from "./theme-provider";
import { Toaster } from "sonner";

type Props = {
  children: ReactNode;
};

function Providers({ children }: Props) {
  return (
    <Provider store={store}>
      <ThemeProvider>
        {children} <Toaster richColors position="top-right" />
      </ThemeProvider>
    </Provider>
  );
}

export default Providers;
