/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/views/dashboard/**/*.blade.php",
        "./resources/views/dashboard/*.blade.php"
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
