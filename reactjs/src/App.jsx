import { useState } from "react";

function App() {
  const [email, setEmail] = useState("");
  const [password, setPassword] = useState("");
  const [showPassword, setShowPassword] = useState(false);
  const [isLoading, setIsLoading] = useState(false);

  const handleLogin = async (e) => {
    e.preventDefault();
    setIsLoading(true);

    // Simulasi validasi login dengan delay minimal 3 detik
    const validationResponse = await Promise.all([
      fetch(
        `http://127.0.0.1:8000/api/loginvalidation?user=${email}&password=${password}`
      ),
      new Promise((resolve) => setTimeout(resolve, 3000)), // Delay minimal 3 detik
    ]);

    const data = await validationResponse[0].json();

    console.log(data);
    setIsLoading(false);

    if (data.success) {
      // Navigasi ke /dashboard
      window.location.href = "/dashboard";
    } else {
      // Tampilkan pesan error atau lakukan sesuatu
      alert(data.message + " silakan coba lagi.");
    }
  };

  return (
    <div className="min-h-screen flex items-center justify-center">
      <div className="mockup-window border bg-slate-300 w-96 shadow-lg rounded-lg">
        <div className="card-body p-6 bg-slate-700">
          <h1 className="card-title text-2xl font-bold mb-4 text-purple-500 dark:text-cyan-500">
            Login
          </h1>
          <form onSubmit={handleLogin}>
            <div className="form-control mb-4">
              <label className="label" htmlFor="usernameOrEmail">
                <span className="label-text text-stone-600 dark:text-stone-300">
                  Username atau Email
                </span>
              </label>
              <label className="input flex items-center gap-2 bg-white dark:bg-zinc-700 text-black dark:text-white">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 16 16"
                  fill="currentColor"
                  className="w-4 h-4 opacity-70"
                >
                  <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6ZM12.735 14c.618 0 1.093-.561.872-1.139a6.002 6.002 0 0 0-11.215 0c-.22.578.254 1.139.872 1.139h9.47Z" />
                </svg>
                <input
                  type="text"
                  id="usernameOrEmail"
                  placeholder="Masukkan username atau email Anda"
                  value={email}
                  onChange={(e) => setEmail(e.target.value)}
                  className="grow"
                  disabled={isLoading}
                />
              </label>
            </div>
            <div className="form-control mb-6">
              <label className="label" htmlFor="password">
                <span className="label-text text-stone-600 dark:text-stone-300">
                  Password
                </span>
              </label>
              <div className="input flex items-center gap-2 bg-white dark:bg-zinc-700 text-black dark:text-white">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 16 16"
                  fill="currentColor"
                  className="w-4 h-4 opacity-70"
                >
                  <path
                    fillRule="evenodd"
                    d="M14 6a4 4 0 0 1-4.899 3.899l-1.955 1.955a.5.5 0 0 1-.353.146H5v1.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-2.293a.5.5 0 0 1 .146-.353l3.955-3.955A4 4 0 1 1 14 6Zm-4-2a.75.75 0 0 0 0 1.5.5.5 0 0 1 .5.5.75.75 0 0 0 1.5 0 2 2 0 0 0-2-2Z"
                    clipRule="evenodd"
                  />
                </svg>

                <input
                  type={showPassword ? "text" : "password"}
                  id="password"
                  placeholder="Masukkan password Anda"
                  value={password}
                  onChange={(e) => setPassword(e.target.value)}
                  className="grow"
                  disabled={isLoading}
                />
                <button
                  type="button"
                  onClick={() => setShowPassword(!showPassword)}
                  className="text-sm"
                >
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    height="24"
                    viewBox="0 -960 960 960"
                    width="24"
                    fill="currentColor"
                  >
                    {showPassword ? (
                      <path d="M160-440q-50 0-85-35t-35-85q0-50 35-85t85-35q50 0 85 35t35 85q0 50-35 85t-85 35Zm640 0q-50 0-85-35t-35-85q0-50 35-85t85-35q50 0 85 35t35 85q0 50-35 85t-85 35Zm-220-54L414-660q14-10 31-15t35-5q50 0 85 35t35 85q0 18-5 35t-15 31ZM792-56 648-200H80v-80h488L56-792l56-56 736 736-56 56Z" />
                    ) : (
                      <path d="M160-440q-50 0-85-35t-35-85q0-50 35-85t85-35q50 0 85 35t35 85q0 50-35 85t-85 35ZM80-200v-80h800v80H80Zm400-240q-50 0-85-35t-35-85q0-50 35-85t85-35q50 0 85 35t35 85q0 50-35 85t-85 35Zm320 0q-50 0-85-35t-35-85q0-50 35-85t85-35q50 0 85 35t35 85q0 50-35 85t-85 35Z" />
                    )}
                  </svg>
                </button>
              </div>
            </div>
            <div className="form-control">
              <button
                type="submit"
                className={`btn ${
                  isLoading ? "disabled" : "btn-outline"
                } btn-primary`}
              >
                {isLoading ? (
                  <>
                    <span className="loading loading-spinner "></span>
                  </>
                ) : (
                  "Masuk"
                )}
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  );
}

export default App;
