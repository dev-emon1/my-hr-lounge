import type { ReactNode } from "react";

import { ThemeProvider as NextThemeProvider } from "next-themes";

type Props = {
  children: ReactNode;
};

function ThemeProvider({ children }: Props) {
  return (
    <NextThemeProvider
      attribute={"class"}
      defaultTheme="dark"
      enableSystem
      disableTransitionOnChange
    >
      {children}
    </NextThemeProvider>
  );
}

export default ThemeProvider;
