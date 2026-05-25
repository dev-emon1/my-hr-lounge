import { useEffect } from "react";

import { Building2, Globe } from "lucide-react";

import { useFormContext } from "react-hook-form";

import { cn } from "@/shared/lib/utils";

import { getInputState } from "@/shared/lib/get-input-state";

import { Input } from "@/shared/ui/input";

import { Label } from "@/shared/ui/label";

import { Textarea } from "@/shared/ui/textarea";

import CompanyLogoUpload from "./company-logo-upload";

import { generateSlug } from "../../utils/generate-slug";

import type { CreateClientSchema } from "../../schemas/create-client-schema";

function CompanyInformationCard() {
  const {
    register,

    watch,

    setValue,

    formState: { errors },
  } = useFormContext<CreateClientSchema>();

  const companyName = watch("companyName");

  const slug = watch("slug");

  const email = watch("email");

  const phone = watch("phone");

  const isCompleted = !!companyName && !!slug && !!email && !!phone;

  useEffect(() => {
    if (!companyName) {
      setValue("slug", "");

      return;
    }

    setValue("slug", generateSlug(companyName));
  }, [companyName, setValue]);

  return (
    <div className="space-y-8">
      {/* LOGO */}
      <CompanyLogoUpload />

      {/* BASIC INFO */}
      <div className="grid gap-6 md:grid-cols-2">
        {/* COMPANY NAME */}
        <div className="space-y-3 md:col-span-2">
          <Label>Company Name</Label>

          <div className="relative">
            <Building2
              size={18}
              className="absolute left-4 top-1/2 -translate-y-1/2 text-muted-foreground"
            />

            <Input
              placeholder="Acme Corporation"
              className={cn(
                "h-14 rounded-2xl pl-11",
                getInputState(!!errors.companyName, !!companyName),
              )}
              {...register("companyName")}
            />
          </div>

          {errors.companyName && (
            <p className="text-sm text-destructive">
              {errors.companyName.message}
            </p>
          )}
        </div>

        {/* SLUG */}
        <div className="space-y-3">
          <Label>Workspace Slug</Label>

          <Input
            placeholder="acme-corporation"
            className={cn(
              "h-14 rounded-2xl",
              getInputState(!!errors.slug, !!slug),
            )}
            {...register("slug")}
          />

          {errors.slug && (
            <p className="text-sm text-destructive">{errors.slug.message}</p>
          )}

          <div className="space-y-2">
            <p className="text-xs text-muted-foreground">
              Unique workspace identifier.
            </p>

            <div className="flex items-center gap-2 text-xs">
              {slug ? (
                <>
                  <div className="h-2 w-2 rounded-full bg-green-500" />

                  <span className="text-green-500">
                    Workspace slug available
                  </span>
                </>
              ) : (
                <>
                  <div className="h-2 w-2 rounded-full bg-yellow-500" />

                  <span className="text-yellow-500">Slug required</span>
                </>
              )}
            </div>
          </div>
        </div>

        {/* TIMEZONE */}
        <div className="space-y-3">
          <Label>Timezone</Label>

          <select
            className="h-14 w-full rounded-2xl border border-input bg-background px-4 text-sm outline-none transition-all duration-300 focus:border-primary"
            {...register("timezone")}
          >
            <option>Asia/Dhaka</option>

            <option>UTC</option>

            <option>Asia/Dubai</option>
          </select>
        </div>

        {/* EMAIL */}
        <div className="space-y-3">
          <Label>Company Email</Label>

          <Input
            type="email"
            placeholder="hello@company.com"
            className={cn(
              "h-14 rounded-2xl",
              getInputState(!!errors.email, !!email),
            )}
            {...register("email")}
          />

          {errors.email && (
            <p className="text-sm text-destructive">{errors.email.message}</p>
          )}
        </div>

        {/* PHONE */}
        <div className="space-y-3">
          <Label>Company Phone</Label>

          <Input
            placeholder="+8801712345678"
            className={cn(
              "h-14 rounded-2xl",
              getInputState(!!errors.phone, !!phone),
            )}
            {...register("phone")}
          />

          {errors.phone && (
            <p className="text-sm text-destructive">{errors.phone.message}</p>
          )}
        </div>

        {/* ADDRESS */}
        <div className="space-y-3 md:col-span-2">
          <Label>Company Address</Label>

          <Textarea
            placeholder="Company address..."
            className="min-h-[120px] rounded-2xl"
            {...register("address")}
          />
        </div>
      </div>

      {/* WORKSPACE PREVIEW */}
      <div
        className={cn(
          "rounded-3xl border p-6 transition-all duration-300",
          isCompleted
            ? "border-green-500/30 bg-green-500/[0.04]"
            : "border-primary/20 bg-primary/[0.04]",
        )}
      >
        <div className="flex items-start gap-4">
          <div className="mt-1 text-primary">
            <Globe size={22} />
          </div>

          <div>
            <h3 className="text-lg font-black">Workspace Preview</h3>

            <p className="mt-2 text-sm leading-6 text-muted-foreground">
              Your client workspace will be accessible through:
            </p>

            <div
              className={cn(
                "mt-5 rounded-2xl border bg-background/80 px-5 py-4 font-mono text-sm font-semibold transition-all duration-300",
                isCompleted
                  ? "border-green-500/30 text-green-500"
                  : "border-primary/20 text-primary",
              )}
            >
              https://myhrlounge.com/workspace/
              {slug || "workspace-slug"}
            </div>
          </div>
        </div>
      </div>
    </div>
  );
}

export default CompanyInformationCard;
