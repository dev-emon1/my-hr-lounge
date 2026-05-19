import * as Dialog from "@radix-ui/react-dialog";

import type { ReactNode } from "react";

import { X } from "lucide-react";

import { cn } from "@/shared/lib/utils";

type Props = {
  open: boolean;

  onOpenChange: (open: boolean) => void;

  children: ReactNode;

  className?: string;
};

function Modal({ open, onOpenChange, children, className }: Props) {
  return (
    <Dialog.Root open={open} onOpenChange={onOpenChange}>
      <Dialog.Portal>
        <Dialog.Overlay className="fixed inset-0 z-50 bg-black/50 backdrop-blur-sm" />

        <Dialog.Content
          className={cn(
            "fixed left-1/2 top-1/2 z-50 w-full max-w-2xl -translate-x-1/2 -translate-y-1/2 rounded-3xl border border-border bg-card p-8 shadow-2xl",

            className,
          )}
        >
          <Dialog.Close className="absolute right-5 top-5 rounded-xl p-2 transition-colors hover:bg-muted">
            <X size={18} />
          </Dialog.Close>

          {children}
        </Dialog.Content>
      </Dialog.Portal>
    </Dialog.Root>
  );
}

export default Modal;
