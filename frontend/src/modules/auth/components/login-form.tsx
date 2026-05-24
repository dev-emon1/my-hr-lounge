import { useState } from "react";

import { Eye, EyeOff, Loader2 } from "lucide-react";

import { useForm } from "react-hook-form";

import { zodResolver } from "@hookform/resolvers/zod";

import { toast } from "sonner";

import { useNavigate } from "react-router-dom";

import { Button } from "@/shared/ui/button";

import { Input } from "@/shared/ui/input";

import { Label } from "@/shared/ui/label";

import { Checkbox } from "@/shared/ui/checkbox";

import { loginSchema, type LoginSchema } from "../schemas/login-schema";

import { useLoginMutation } from "../api/auth-api";

import { tokenStorage } from "../utils/token-storage";

import { useAppDispatch } from "@/shared/hooks/redux";

import { setCredentials } from "../store/auth-slice";

function LoginForm() {
  const navigate = useNavigate();

  const dispatch = useAppDispatch();

  const [showPassword, setShowPassword] = useState(false);

  const [login, { isLoading }] = useLoginMutation();

  const {
    register,

    handleSubmit,

    formState: { errors },
  } = useForm<LoginSchema>({
    resolver: zodResolver(loginSchema),

    defaultValues: {
      email: "admin@myhrlounge.com",

      password: "Admin@12345",
    },
  });

  const onSubmit = async (values: LoginSchema) => {
    try {
      const response = await login(values).unwrap();

      const { user, tokens } = response.data;

      tokenStorage.setAccessToken(tokens.access_token);

      tokenStorage.setRefreshToken(tokens.refresh_token);

      dispatch(
        setCredentials({
          user,

          accessToken: tokens.access_token,

          refreshToken: tokens.refresh_token,
        }),
      );

      toast.success("Login successful");

      navigate("/");
    } catch (error: any) {
      console.error(error);

      const errorMessage = error?.data?.error?.message || "Login failed";

      toast.error(errorMessage);
    }
  };

  return (
    <div className="rounded-[32px] border border-border bg-card/80 p-8 shadow-2xl backdrop-blur-xl">
      <div className="mb-8">
        <h2 className="text-3xl font-black tracking-tight">Welcome Back</h2>

        <p className="mt-2 text-muted-foreground">
          Login to continue managing your platform.
        </p>
      </div>

      <form onSubmit={handleSubmit(onSubmit)} className="space-y-6">
        {/* EMAIL */}
        <div className="space-y-2">
          <Label>Email Address</Label>

          <Input
            type="email"
            placeholder="admin@myhrlounge.com"
            {...register("email")}
          />

          {errors.email && (
            <p className="text-sm text-destructive">{errors.email.message}</p>
          )}
        </div>

        {/* PASSWORD */}
        <div className="space-y-2">
          <Label>Password</Label>

          <div className="relative">
            <Input
              type={showPassword ? "text" : "password"}
              placeholder="••••••••"
              {...register("password")}
            />

            <button
              type="button"
              onClick={() => setShowPassword(!showPassword)}
              className="absolute right-4 top-1/2 -translate-y-1/2 text-muted-foreground"
            >
              {showPassword ? <EyeOff size={18} /> : <Eye size={18} />}
            </button>
          </div>

          {errors.password && (
            <p className="text-sm text-destructive">
              {errors.password.message}
            </p>
          )}
        </div>

        {/* REMEMBER */}
        <div className="flex items-center justify-between">
          <div className="flex items-center gap-2">
            <Checkbox id="remember" />

            <Label htmlFor="remember">Remember me</Label>
          </div>

          <button type="button" className="text-sm font-medium text-primary">
            Forgot password?
          </button>
        </div>

        {/* SUBMIT */}
        <Button
          type="submit"
          disabled={isLoading}
          className="h-12 w-full rounded-2xl text-base font-semibold"
        >
          {isLoading ? <Loader2 className="animate-spin" /> : "Login"}
        </Button>
      </form>
    </div>
  );
}

export default LoginForm;
