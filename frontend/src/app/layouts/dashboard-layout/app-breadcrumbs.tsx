import { ChevronRight } from "lucide-react";

import { Link, useLocation } from "react-router-dom";

function AppBreadcrumbs() {
  const location = useLocation();

  const paths = location.pathname.split("/").filter(Boolean);

  return (
    <div className="flex flex-wrap items-center gap-2 text-sm text-muted-foreground">
      <Link
        to="/"
        className="font-medium transition-colors hover:text-foreground"
      >
        Dashboard
      </Link>

      {paths.map((path, index) => {
        const href = "/" + paths.slice(0, index + 1).join("/");

        return (
          <div key={href} className="flex items-center gap-2">
            <ChevronRight size={14} />

            <Link
              to={href}
              className="capitalize transition-colors hover:text-foreground"
            >
              {path.replaceAll("-", " ")}
            </Link>
          </div>
        );
      })}
    </div>
  );
}

export default AppBreadcrumbs;
