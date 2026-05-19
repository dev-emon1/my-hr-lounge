import { useState } from "react";

import { useNavigate } from "react-router-dom";

import { Button } from "@/shared/ui/button";

import { mockUsers } from "../data/mock-users";

import { useAppDispatch } from "@/shared/hooks/redux";

import { setCredentials } from "../store/auth-slice";

function LoginPage() {
  const navigate = useNavigate();

  const dispatch = useAppDispatch();

  const [email, setEmail] = useState("");

  const [password, setPassword] = useState("");

  const handleLogin = () => {
    const user = mockUsers.find(
      (item) => item.email === email && item.password === password,
    );

    if (!user) {
      alert("Invalid credentials");

      return;
    }

    dispatch(
      setCredentials({
        user: {
          id: user.id,

          name: user.name,

          email: user.email,

          role: user.role as
            | "super-admin"
            | "company-admin"
            | "hr-admin"
            | "employee",
        },

        accessToken: "mock-access-token",
      }),
    );

    navigate("/");
  };

  return (
    <div className="w-full max-w-md rounded-2xl border bg-card p-8 shadow-sm">
      <div className="mb-8 text-center">
        <h1 className="text-3xl font-bold text-primary">A&A HR Lounge</h1>

        <p className="mt-2 text-muted-foreground">Enterprise HR Management</p>
      </div>

      <div className="space-y-4">
        <input
          type="email"
          placeholder="Email"
          className="h-11 w-full rounded-xl border bg-background px-4 outline-none"
          value={email}
          onChange={(e) => setEmail(e.target.value)}
        />

        <input
          type="password"
          placeholder="Password"
          className="h-11 w-full rounded-xl border bg-background px-4 outline-none"
          value={password}
          onChange={(e) => setPassword(e.target.value)}
        />

        <Button className="w-full" onClick={handleLogin}>
          Login
        </Button>
      </div>

      <div className="mt-8 rounded-xl bg-muted p-4 text-sm">
        <p className="font-semibold">Demo Accounts</p>

        <div className="mt-3 space-y-2 text-muted-foreground">
          <p>super@aa.com / 123456</p>

          <p>admin@aa.com / 123456</p>

          <p>hr@aa.com / 123456</p>

          <p>employee@aa.com / 123456</p>
        </div>
      </div>
    </div>
  );
}

export default LoginPage;
