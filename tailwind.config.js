/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    plugins: [require("daisyui")],
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
