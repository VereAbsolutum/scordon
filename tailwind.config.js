/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            scale: {
                102: "1.02",
            },
            colors: {
                primary: {
                    DEFAULT: "#fcb801", // Primary color
                    light: "#fcd34d", // Lighter shade
                    dark: "#c59100", // Darker shade
                    100: "rgba(252, 211, 77, 0.11)",
                },
                secondary: {
                    DEFAULT: "#1e40af", // Blue-ish secondary color
                    light: "#3b82f6", // Lighter shade of secondary
                    dark: "#1e3a8a", // Darker shade of secondary
                },
                accent: {
                    DEFAULT: "#f97316", // Orange accent color
                    light: "#fb923c", // Lighter accent shade
                    dark: "#c2410c", // Darker accent shade
                },
                neutral: {
                    DEFAULT: "#374151", // Neutral grey color
                    light: "#6b7280", // Lighter neutral
                    dark: "#111827", // Darker neutral
                },
                base: {
                    DEFAULT: "#ffffff", // Base background color
                    light: "#f3f4f6", // Slightly off-white
                    dark: "#e5e7eb", // Darker base tone
                },
                gray: {
                    50: "#f9fafb",
                    100: "#f3f4f6",
                    200: "#e5e7eb",
                    300: "#d1d5db",
                    400: "#9ca3af",
                    500: "#6b7280",
                    600: "#4b5563",
                    700: "#374151",
                    800: "#1f2937",
                    900: "#111827",
                },
                error: {
                    DEFAULT: "#dc2626", // Error color (red)
                    light: "#f87171",
                    dark: "#991b1b",
                },
                success: {
                    DEFAULT: "#16a34a", // Success color (green)
                    light: "#4ade80",
                    dark: "#15803d",
                },
                warning: {
                    DEFAULT: "#f59e0b", // Warning color (yellowish)
                    light: "#fbbf24",
                    dark: "#b45309",
                },
            },
            fontFamily: {
                display: ["Oswald", "sans-serif"],
                sans: ["Montserrat", "sans-serif"],
            },
            fontSize: {
                display: "3.5rem",
                heading1: "1.0625rem",
                heading2: "2.3rem",
                heading3: "2rem",
                heading4: "1.5rem",
                body: "1.0625rem",
                navbar: "1.125rem",
            },
        },
    },
    plugins: [require("daisyui"), require("@tailwindcss/typography")],
    daisyui: {
        themes: [
            {
                mytheme: {
                    primary: "#fcb801",
                    secondary: "#1e40af",
                    accent: "#f97316",
                    neutral: "#374151",
                    "base-100": "#ffffff",
                    info: "#3b82f6",
                    success: "#16a34a",
                    warning: "#f59e0b",
                    error: "#dc2626",
                },
            },
        ],
    },
};
