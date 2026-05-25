import { Check } from "lucide-react";

import { cn } from "@/shared/lib/utils";

import { createClientSteps } from "../../constants/create-client-steps";

type Props = {
  currentStep: number;
};

function CreateClientStepper({ currentStep }: Props) {
  return (
    <div className="rounded-[32px] border border-border bg-card/60 p-8 shadow-2xl backdrop-blur-xl">
      <div className="flex flex-col gap-8 lg:flex-row lg:items-center lg:justify-between">
        {createClientSteps.map((step, index) => {
          const isActive = currentStep === step.id;

          const isCompleted = currentStep > step.id;

          return (
            <div key={step.id} className="flex flex-1 items-center gap-5">
              {/* STEP */}
              <div className="flex items-center gap-4">
                <div
                  className={cn(
                    "flex h-14 w-14 shrink-0 items-center justify-center rounded-3xl border text-lg font-black transition-all duration-300",
                    isCompleted &&
                      "border-primary bg-primary text-primary-foreground shadow-lg",

                    isActive && "border-primary bg-primary/10 text-primary",

                    !isCompleted &&
                      !isActive &&
                      "border-border bg-background/40 text-muted-foreground",
                  )}
                >
                  {isCompleted ? <Check size={22} /> : step.id}
                </div>

                <div>
                  <h3
                    className={cn(
                      "font-black transition-colors duration-300",
                      isActive ? "text-foreground" : "text-muted-foreground",
                    )}
                  >
                    {step.title}
                  </h3>

                  <p className="text-sm text-muted-foreground">
                    {step.description}
                  </p>
                </div>
              </div>

              {/* LINE */}
              {index !== createClientSteps.length - 1 && (
                <div className="hidden h-[2px] flex-1 rounded-full bg-border lg:block">
                  <div
                    className={cn(
                      "h-full rounded-full transition-all duration-500",
                      isCompleted ? "w-full bg-primary" : "w-0 bg-primary",
                    )}
                  />
                </div>
              )}
            </div>
          );
        })}
      </div>
    </div>
  );
}

export default CreateClientStepper;
