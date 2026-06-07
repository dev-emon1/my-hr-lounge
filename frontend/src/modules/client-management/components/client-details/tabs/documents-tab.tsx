import { Download, FileText, Upload } from "lucide-react";

import { Button } from "@/shared/ui/button";

function DocumentsTab() {
  const documents = [
    {
      name: "Service Agreement.pdf",

      size: "2.4 MB",
    },

    {
      name: "NDA.pdf",

      size: "1.1 MB",
    },

    {
      name: "Quotation.pdf",

      size: "850 KB",
    },
  ];

  return (
    <div className="space-y-6">
      <div className="flex justify-end">
        <Button>
          <Upload size={16} />
          Upload Document
        </Button>
      </div>

      {documents.map((document) => (
        <div
          key={document.name}
          className="flex items-center justify-between rounded-[24px] border border-border p-5"
        >
          <div className="flex items-center gap-4">
            <FileText size={22} />

            <div>
              <h4 className="font-semibold">{document.name}</h4>

              <p className="text-sm text-muted-foreground">{document.size}</p>
            </div>
          </div>

          <Button variant="outline">
            <Download size={16} />
            Download
          </Button>
        </div>
      ))}
    </div>
  );
}

export default DocumentsTab;
