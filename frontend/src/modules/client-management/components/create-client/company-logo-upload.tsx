import { useRef, useState } from "react";

import { ImagePlus, Trash2, UploadCloud } from "lucide-react";

import { cn } from "@/shared/lib/utils";

function CompanyLogoUpload() {
  const inputRef = useRef<HTMLInputElement | null>(null);

  const [preview, setPreview] = useState<string | null>(null);

  const [dragging, setDragging] = useState(false);

  const handleFile = (file: File) => {
    const imageUrl = URL.createObjectURL(file);

    setPreview(imageUrl);
  };

  return (
    <div className="space-y-5">
      <div
        onDragOver={(e) => {
          e.preventDefault();

          setDragging(true);
        }}
        onDragLeave={() => setDragging(false)}
        onDrop={(e) => {
          e.preventDefault();

          setDragging(false);

          const file = e.dataTransfer.files?.[0];

          if (file) {
            handleFile(file);
          }
        }}
        className={cn(
          "relative overflow-hidden rounded-[32px] border border-dashed bg-background/30 transition-all duration-300",
          dragging ? "border-primary bg-primary/[0.04]" : "border-border",
        )}
      >
        <input
          ref={inputRef}
          type="file"
          accept="image/*"
          hidden
          onChange={(e) => {
            const file = e.target.files?.[0];

            if (file) {
              handleFile(file);
            }
          }}
        />

        {!preview ? (
          <div className="flex flex-col items-center justify-center px-8 py-16 text-center">
            <div className="flex h-20 w-20 items-center justify-center rounded-3xl bg-primary/10 text-primary">
              <UploadCloud size={36} />
            </div>

            <h3 className="mt-6 text-2xl font-black tracking-tight">
              Upload Company Logo
            </h3>

            <p className="mt-3 max-w-lg text-sm leading-7 text-muted-foreground">
              Drag & drop logo image here or browse local files to upload
              company branding assets.
            </p>

            <button
              type="button"
              onClick={() => inputRef.current?.click()}
              className="mt-8 rounded-2xl border border-border bg-background px-6 py-3 text-sm font-semibold transition-all duration-300 hover:border-primary hover:text-primary"
            >
              Browse Files
            </button>
          </div>
        ) : (
          <div className="relative">
            <img
              src={preview}
              alt="Company logo preview"
              className="h-[280px] w-full object-cover"
            />

            {/* OVERLAY */}
            <div className="absolute inset-0 bg-black/40 opacity-0 transition-opacity duration-300 hover:opacity-100">
              <div className="flex h-full items-center justify-center gap-4">
                <button
                  type="button"
                  onClick={() => inputRef.current?.click()}
                  className="flex h-14 w-14 items-center justify-center rounded-2xl bg-white text-black shadow-2xl transition-transform duration-300 hover:scale-105"
                >
                  <ImagePlus size={22} />
                </button>

                <button
                  type="button"
                  onClick={() => setPreview(null)}
                  className="flex h-14 w-14 items-center justify-center rounded-2xl bg-red-500 text-white shadow-2xl transition-transform duration-300 hover:scale-105"
                >
                  <Trash2 size={22} />
                </button>
              </div>
            </div>
          </div>
        )}
      </div>

      <div className="rounded-2xl border border-primary/20 bg-primary/[0.04] px-5 py-4">
        <p className="text-sm leading-6 text-muted-foreground">
          Recommended: PNG, SVG, JPG. Max upload size 5MB. Minimum resolution
          512×512.
        </p>
      </div>
    </div>
  );
}

export default CompanyLogoUpload;
