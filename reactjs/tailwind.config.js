/** @type {import('tailwindcss').Config} */
module.exports = {
  darkMode: "class",
  content: [
    "./src/pages/**/*.{js,ts,jsx,tsx,mdx}",
    "./src/components/**/*.{js,ts,jsx,tsx,mdx}",
    "./src/app/**/*.{js,ts,jsx,tsx,mdx}",
    "./src/App.jsx",
    "./index.html",
  ],
  theme: {
    fontFamily: {
      figtree: ["Figtree", "sans-serif"],
    },
    container: {
      center: true,
      padding: "16px",
    },
    extend: {
      colors: {
        primary: "#c026d3",
        secondary: "#64748b",
        dark: "#0f172a",
        reddark: '#B0233C',
      },
      screens: {
        "2xl": "1320px",
      },
      backgroundImage: {
        "gradient-radial": "radial-gradient(var(--tw-gradient-stops))",
        "gradient-conic":
          "conic-gradient(from 180deg at 50% 50%, var(--tw-gradient-stops))",
      },
    },
  },
  daisyui: {
    themes: [
      {
        mytheme: {
          "primary": "#c026d3",

        },
      },
    ],
  },
  plugins: [require("daisyui")],
};
