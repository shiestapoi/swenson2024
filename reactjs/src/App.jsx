import React, { useState, useEffect, useRef } from "react";

function App() {
  const [email, setEmail] = useState("");
  const [password, setPassword] = useState("");
  const [rememberMe, setRememberMe] = useState(false);
  const [showPassword, setShowPassword] = useState(false);
  const [isLoading, setIsLoading] = useState(false);
  const [message, setMessage] = useState("");
  const [messageType, setMessageType] = useState("");
  const [showAlert, setShowAlert] = useState(false);
  const [alertVisible, setAlertVisible] = useState(false);
  const [alertHidden, setAlertHidden] = useState(false);
  const [messageTimestamp, setMessageTimestamp] = useState(0); // New state for timestamp
  const [formError, setFormError] = useState("");
  const [emailValid, setEmailValid] = useState(true);
  const [passwordValid, setPasswordValid] = useState(true);
  const [passwordErrorVisible, setPasswordErrorVisible] = useState(false);
  const [emailErrorVisible, setEmailErrorVisible] = useState(false);
  const [darkMode, setDarkMode] = useState(
    localStorage.theme === "dark" ||
      (!("theme" in localStorage) &&
        window.matchMedia("(prefers-color-scheme: dark)").matches)
  );

  const formRef = useRef(null);

  useEffect(() => {
    if (darkMode) {
      document.documentElement.classList.add("dark");
      localStorage.theme = "dark";
    } else {
      document.documentElement.classList.remove("dark");
      localStorage.theme = "light";
    }
  }, [darkMode]);

  const handleDarkModeToggle = () => {
    setDarkMode(!darkMode);
  };
  // Function to set message and timestamp
  const updateMessage = (newMessage, newMessageType) => {
    setMessage(newMessage);
    setMessageType(newMessageType);
    setMessageTimestamp(Date.now()); // Update timestamp whenever message is set
  };

  useEffect(() => {
    if (message) {
      setShowAlert(true);
      setAlertVisible(true);
      setTimeout(() => {
        setAlertHidden(true); // Set alert to hidden after 3 seconds
        setTimeout(() => {
          setAlertVisible(false); // Start fadeOut animation
          setTimeout(() => {
            setAlertHidden(false); // Reset alertHidden after fadeOut animation ends
          }, 500); // Tambahkan jeda tambahan sesuai durasi animasi fadeOut
        }, 3000); // Message will disappear after 3 seconds
      }, 3000);
    }
  }, [message, messageTimestamp]); // Add messageTimestamp as a dependency

  useEffect(() => {
    if (!alertVisible && showAlert) {
      const timer = setTimeout(() => {
        setShowAlert(false); // Hide alert after animation ends
      }, 500); // Adjust according to fadeOut animation duration
      return () => clearTimeout(timer);
    }
  }, [alertVisible, showAlert]);

  useEffect(() => {
    if (!passwordValid) {
      setPasswordErrorVisible(true);
    } else {
      setTimeout(() => setPasswordErrorVisible(false), 300); // Durasi harus sama dengan transisi CSS
    }
  }, [passwordValid]);

  useEffect(() => {
    if (!emailValid) {
      setEmailErrorVisible(true);
    } else {
      setTimeout(() => setEmailErrorVisible(false), 300); // Durasi harus sama dengan transisi CSS
    }
  }, [emailValid]);

  const handleLogin = async (e) => {
    e.preventDefault();
    // Reset form error
    setFormError("");

    // Contoh validasi sederhana untuk email dan password
    const isEmailValid = email !== "";
    const isPasswordValid = password !== "";

    setEmailValid(isEmailValid);
    setPasswordValid(isPasswordValid);

    // Jika salah satu tidak valid, hentikan proses login
    if (!isEmailValid || !isPasswordValid) {
      return; // Hentikan fungsi jika validasi gagal
    }

    setIsLoading(true);

    setTimeout(async () => {
      try {
        setShowAlert(false); // Reset semua tindakan alert
        setAlertVisible(false);
        setAlertHidden(false);
        const controller = new AbortController();
        const timeoutId = setTimeout(() => controller.abort(), 30000);
        const baseurl = window.location.origin;
        const response = await fetch(`${baseurl}/api/loginvalidation`, {
          method: "POST",
          headers: {
            "Content-Type": "application/json",
          },
          credentials: "include", // Menambahkan credentials: 'include'
          body: JSON.stringify({
            user: email,
            password: password,
            rememberMe: rememberMe,
          }),
          signal: controller.signal,
        });
        clearTimeout(timeoutId);

        if (!response.ok) {
          throw new Error("Gagal mendapatkan respons dari server");
        }

        const data = await response.json();
        setIsLoading(false);

        if (data.success) {
          updateMessage(
            "Login berhasil. Anda akan diarahkan ke halaman dashboard..",
            "success"
          );
          formRef.current.submit();
        } else {
          updateMessage(data.message + "!. Silakan coba lagi.", "warning");
        }
      } catch (error) {
        console.log(error);
        setIsLoading(false);
        if (error.name === "AbortError") {
          updateMessage(
            "Waktu tunggu telah habis!. Silakan coba lagi.",
            "error"
          );
        } else {
          updateMessage(
            "Terjadi kesalahan saat menghubungi server!. Silakan coba lagi.",
            "error"
          );
        }
      }
    }, 2000);
  };

  return (
    <>
      {message && showAlert && (
        <div
          role="alert"
          className={`absolute navbar-fixed left-1/2 top-5 transform -translate-x-1/2 w-auto justify-center alert ${
            messageType === "warning"
              ? "alert-warning"
              : messageType === "error"
              ? "alert-error"
              : "alert-success"
          } ${alertVisible ? "alert-visible" : ""} ${
            alertHidden ? "alert-hidden" : ""
          }`}
          onAnimationEnd={() => {
            if (!alertVisible) {
              setMessage(""); // Clear message after fadeOut animation ends
            }
          }}
        >
          <svg
            xmlns="http://www.w3.org/2000/svg"
            className="stroke-current shrink-0 h-6 w-6"
            fill="none"
            viewBox="0 0 24 24"
          >
            <path
              strokeLinecap="round"
              strokeLinejoin="round"
              strokeWidth="2"
              d={
                messageType === "error"
                  ? "M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z"
                  : messageType === "warning"
                  ? "M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"
                  : "M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"
              }
            />
          </svg>
          <span>{message}</span>
        </div>
      )}
      <div className="min-h-screen flex items-center justify-center">
        <div className="mockup-window border my-10 dark:border-white border-slate-700 transition duration-300 bg-indigo-400 dark:bg-slate-300 w-96 shadow-lg rounded-lg">
          <div className="card-body p-6 transition duration-300 bg-fuchsia-200 dark:bg-slate-700">
            <h1 className="card-title text-2xl font-bold mb-4 text-purple-500 transition duration-300 dark:text-cyan-500">
              Login
              <label
                className={`swap swap-rotate ${
                  darkMode ? "yellowneon" : "slateneon"
                }`}
              >
                <input
                  type="checkbox"
                  id="dark-toggle"
                  checked={darkMode}
                  onChange={handleDarkModeToggle}
                />
                <svg
                  className="swap-on fill-current text-yellow-300 w-8 h-8"
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 24 24"
                >
                  <path d="M5.64,17l-.71.71a1,1,0,0,0,0,1.41,1,1,0,0,0,1.41,0l.71-.71A1,1,0,0,0,5.64,17ZM5,12a1,1,0,0,0-1-1H3a1,1,0,0,0,0,2H4A1,1,0,0,0,5,12Zm7-7a1,1,0,0,0,1-1V3a1,1,0,0,0-2,0V4A1,1,0,0,0,12,5ZM5.64,7.05a1,1,0,0,0,.7.29,1,1,0,0,0,.71-.29,1,1,0,0,0,0-1.41l-.71-.71A1,1,0,0,0,4.93,6.34Zm12,.29a1,1,0,0,0,.7-.29l.71-.71a1,1,0,1,0-1.41-1.41L17,5.64a1,1,0,0,0,0,1.41A1,1,0,0,0,17.66,7.34ZM21,11H20a1,1,0,0,0,0,2h1a1,1,0,0,0,0-2Zm-9,8a1,1,0,0,0-1,1v1a1,1,0,0,0,2,0V20A1,1,0,0,0,12,19ZM18.36,17A1,1,0,0,0,17,18.36l.71.71a1,1,0,0,0,1.41,0,1,1,0,0,0,0-1.41ZM12,6.5A5.5,5.5,0,1,0,17.5,12,5.51,5.51,0,0,0,12,6.5Zm0,9A3.5,3.5,0,1,1,15.5,12,3.5,3.5,0,0,1,12,15.5Z" />
                </svg>
                <svg
                  className="swap-off fill-current w-8 h-8 text-slate-500"
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 24 24"
                >
                  <path d="M21.64,13a1,1,0,0,0-1.05-.14,8.05,8.05,0,0,1-3.37.73A8.15,8.15,0,0,1,9.08,5.49a8.59,8.59,0,0,1,.25-2A1,1,0,0,0,8,2.36,10.14,10.14,0,1,0,22,14.05,1,1,0,0,0,21.64,13Zm-9.5,6.69A8.14,8.14,0,0,1,7.08,5.22v.27A10.15,10.15,0,0,0,17.22,15.63a9.79,9.79,0,0,0,2.1-.22A8.11,8.11,0,0,1,12.14,19.73Z" />
                </svg>
              </label>
            </h1>
            <form
              ref={formRef}
              onSubmit={handleLogin}
              method="POST"
              action={`${window.location.origin}/login`}
            >
              <input
                type="hidden"
                name="_token"
                value={document
                  .querySelector('meta[name="csrf-token"]')
                  .getAttribute("content")}
                autoComplete="off"
              />
              <input type="hidden" name="user" value={email} />
              <input type="hidden" name="password" value={password} />
              <input type="hidden" name="rememberMe" value={rememberMe} />
              <div className="form-control mb-4">
                <label className="label" htmlFor="usernameOrEmail">
                  <span className="label-text text-stone-600 transition duration-300 dark:text-stone-300">
                    Username atau Email
                  </span>
                </label>
                <div
                  className={`input ${
                    !emailValid ? "input-error" : ""
                  } flex items-center gap-2 bg-white transition duration-300 dark:bg-zinc-700 text-black dark:text-white`}
                >
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
                    onChange={(e) => {
                      setEmail(e.target.value);
                      setEmailValid(true);
                    }}
                    className="grow"
                    disabled={isLoading}
                  />
                </div>
                {emailErrorVisible && (
                  <span
                    className={`text-start label-text -mb-4 text-rose-500 password-error ${
                      !emailValid ? "password-error-visible" : ""
                    }`}
                  >
                    Username atau Email Kosong!
                  </span>
                )}
              </div>
              <div className="form-control mb-2">
                <label className="label" htmlFor="password">
                  <span className="label-text text-stone-600 transition duration-300 dark:text-stone-300">
                    Password
                  </span>
                </label>
                <div
                  className={`input ${
                    !passwordValid ? "input-error" : ""
                  } flex items-center gap-2 bg-white transition duration-300 dark:bg-zinc-700 text-black dark:text-white`}
                >
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
                    onChange={(e) => {
                      setPassword(e.target.value);
                      setPasswordValid(true);
                    }}
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
                {passwordErrorVisible && (
                  <span
                    className={`text-start label-text -mb-4 text-rose-500 password-error ${
                      !passwordValid ? "password-error-visible" : ""
                    }`}
                  >
                    Password Kosong!
                  </span>
                )}
              </div>

              <div className="form-control mb-3">
                <label className="cursor-pointer label flex items-center">
                  <span className="label-text text-base transition duration-300 text-stone-600 dark:text-stone-300 mr-2">
                    Remember me
                  </span>
                  <input
                    type="checkbox"
                    className="toggle toggle-primary p-2 text-dark"
                    checked={rememberMe}
                    onChange={() => setRememberMe(!rememberMe)}
                  />
                </label>
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
                      <span className="loading loading-spinner"></span>
                    </>
                  ) : (
                    <>
                      <span>
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          height="24"
                          viewBox="0 -960 960 960"
                          width="24"
                          fill="currentColor"
                        >
                          <path d="M480-120v-80h280v-560H480v-80h280q33 0 56.5 23.5T840-760v560q0 33-23.5 56.5T760-120H480Zm-80-160-55-58 102-102H120v-80h327L345-622l55-58 200 200-200 200Z" />
                        </svg>
                      </span>
                      Masuk
                    </>
                  )}
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </>
  );
}

export default App;
