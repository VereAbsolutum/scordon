/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            fontFamily: {
                display: ["Oswald", "sans-serif"],
                sans: ["Montserrat", "sans-serif"],
            },
            fontSize: {
                display: "3.5rem",
                heading1: "3rem",
                heading2: "2rem",
                heading3: "1.5rem",
                body: "1.0625rem",
                navbar: "1.125rem",
            },
        },
    },
    daisyui: {
        themes: [
            {
                mytheme: {
                    primary: "#ff00ff",

                    "primary-content": "#160016",

                    secondary: "#ff00ff",

                    "secondary-content": "#160016",

                    accent: "#00ffff",

                    "accent-content": "#001616",

                    neutral: "#ff00ff",

                    "neutral-content": "#160016",

                    "base-100": "#ffffff",

                    "base-200": "#dedede",

                    "base-300": "#bebebe",

                    "base-content": "#161616",

                    info: "#0000ff",

                    "info-content": "#c6dbff",

                    success: "#00ff00",

                    "success-content": "#001600",

                    warning: "#00ff00",

                    "warning-content": "#001600",

                    error: "#ff0000",

                    "error-content": "#160000",
                },
            },
        ],
    },
    plugins: [require("daisyui")],
};
