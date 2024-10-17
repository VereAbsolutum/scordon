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
            /*
            colors: {
                primary: {
                    50: "#fefce8", // Lighter shade for primary
                    100: "#fef09a", // Light shade
                    200: "#fcd34d", // Default primary color
                    300: "#fbbf24", // Slightly darker
                    400: "#f59e0b", // Darker shade
                    500: "#d97706", // Darkest primary color
                    600: "#b45309", // Darker accent
                    700: "#92400e", // Darker accent shade
                },
                secondary: {
                    50: "#e0f2fe", // Lighter shade for secondary
                    100: "#bae6fd", // Light shade
                    200: "#7dd3fc", // Default secondary color
                    300: "#38bdf8", // Slightly darker
                    400: "#0ea5e0", // Darker shade
                    500: "#0284c7", // Darkest secondary color
                    600: "#0369a1", // Darker accent
                    700: "#075985", // Darker accent shade
                },
                accent: {
                    50: "#fff7ed", // Lighter shade for accent
                    100: "#ffedd5", // Light shade
                    200: "#f97316", // Default accent color
                    300: "#ea580c", // Slightly darker
                    400: "#c2410c", // Darker shade
                    500: "#9a3412", // Darkest accent color
                    600: "#7c2d12", // Darker accent
                    700: "#5b1f0e", // Darker accent shade
                },
                neutral: {
                    50: "#f9fafb", // Lighter neutral
                    100: "#f3f4f6", // Light neutral
                    200: "#e5e7eb", // Default neutral
                    300: "#d1d5db", // Slightly darker
                    400: "#9ca3af", // Darker neutral
                    500: "#6b7280", // Darkest neutral
                    600: "#4b5563", // Darker neutral shade
                    700: "#374151", // Darker neutral
                    800: "#1f2937", // Darker neutral
                    900: "#111827", // Darkest neutral
                },
                base: {
                    50: "#ffffff", // Base white
                    100: "#f3f4f6", // Slightly off-white
                    200: "#e5e7eb", // Light base
                },
                error: {
                    50: "#fee2e2", // Light error shade
                    100: "#fecaca", // Lighter error shade
                    200: "#fca5a5", // Default error color
                    300: "#f87171", // Slightly darker
                    400: "#dc2626", // Darker error
                    500: "#991b1b", // Darkest error
                },
                success: {
                    50: "#dcfce7", // Light success shade
                    100: "#bbf7d0", // Lighter success shade
                    200: "#86efac", // Default success color
                    300: "#4ade80", // Slightly darker
                    400: "#16a34a", // Darker success
                    500: "#15803d", // Darkest success
                },
                warning: {
                    50: "#fef9c3", // Light warning shade
                    100: "#fef08a", // Lighter warning shade
                    200: "#f59e0b", // Default warning color
                    300: "#fbbf24", // Slightly darker
                    400: "#f97316", // Darker warning
                    500: "#b45309", // Darkest warning
                },
            },
            */
            fontFamily: {
                display: ["Oswald", "sans-serif"],
                title: ["Oswald", "sans-serif"],
                sans: ["Montserrat", "sans-serif"],
            },
            fontSize: {
                display: "3.5rem", // Título principal
                heading1: "2.5rem", // Título principal (H1)
                heading2: "2rem", // Título secundário (H2)
                heading3: "1.75rem", // Título terciário (H3)
                heading4: "1.5rem", // Título quaternário (H4)
                heading5: "1.25rem", // Título quinário (H5)
                subheader: "1.125rem", // Subtítulo
                paragraph1: "1rem", // Parágrafo principal
                paragraph2: "0.875rem", // Parágrafo secundário
                paragraph3: "0.75rem", // Parágrafo terciário
                caption: "0.625rem", // Legenda
                footer: "0.875rem", // Texto de rodapé
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
