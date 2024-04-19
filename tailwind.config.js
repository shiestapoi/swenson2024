/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/views/home/**/*.blade.php",
        "./resources/views/home/*.blade.php"
    ],
    darkMode: "class",
    theme: {
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
        },
    },
    plugins: [require("daisyui")],
};
