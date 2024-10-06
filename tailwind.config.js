/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    plugins: [require("@tailwindcss/typography"), require("daisyui")],
    theme: {
        extend: {
            fontFamily: {
                sans: ["Source Sans Pro", "sans-serif"],
            },
        },
    },
    daisyui: {
        themes: [
            {
                default: {
                    ...require("daisyui/src/theming/themes")["light"],
                    primary: "#fcb900",
                },
            },
        ],
    },
};
