import { useForm } from "react-hook-form";

import { zodResolver } from "@hookform/resolvers/zod";

import {
  createClientSchema,
  type CreateClientSchema,
} from "../schemas/create-client-schema";

import { createClientDefaultValues } from "../constants/create-client-default-values";

export function useCreateClientForm() {
  return useForm<CreateClientSchema>({
    resolver: zodResolver(createClientSchema),

    defaultValues: createClientDefaultValues,

    mode: "onChange",
  });
}
